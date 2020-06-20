<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User\Ad;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth:admin');*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::orderBy('created_at', 'DESC')->get();
        return view('user.client.ad.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('user.client.ad.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        $request->visibility ? : $request['visibility'] = 0;

        $ad = new Ad;
        $ad->title = $request->title;
        $ad->slug = $request->slug;
        $ad->visibility = $request->visibility;
        $ad->description = $request->description;
        $ad->save();

        $ad->categories()->sync($request->category);
        return redirect(route('ad.index'))->with('toast_success', 'Ad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = Ad::find($id);
        return view('user.client.ad.show', compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad::with('categories')->find($id);
        $categories = Category::all();
        return view('user.client.ad.edit', compact('ad', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        $request->visibility ? : $request['visibility'] = 0;

        $ad = Ad::find($id);
        $ad->title = $request->title;
        $ad->slug = $request->slug;
        $ad->visibility = $request->visibility;
        $ad->description = $request->description;
        $ad->save();

        $ad->categories()->sync($request->category);
        return redirect(route('ad.index'))->with('toast_success', 'Ad updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Ad::where('id', $id)->delete();
       return redirect()->back()->with('toast_success', 'Ad deleted successfully.');
    }
}
