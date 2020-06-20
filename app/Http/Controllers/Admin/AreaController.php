<?php

namespace App\Http\Controllers\Admin;

use App\models\admin\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Area;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        /*$this->middleware('can:posts.category');*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*if (Auth::user()->can('areas.viewAny')) {*/
        $areas = Area::all();
        $countries = Country::all();
        return view('admin.area.show', compact('areas', 'countries'));
        /*}*/
        /*return redirect(route('admin.home'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*if (Auth::user()->can('areas.create')) {*/
            $areas = Area::all();
            $countries = Country::all();
            return view('admin.area.create', compact('areas', 'countries'));
        /*}
        return redirect(route('admin.home'));*/
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
            'name' => 'required',
            'slug' => 'required',
        ]);

        $area = new Area;
        $area->name = $request->name;
        $area->slug = $request->slug;
        $area->status = $request->status;

        $area->save();
        return redirect(route('area.index'))->with('toast_success', 'Area created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*if (Auth::user()->can('areas.create')) {*/
            $area = Area::find($id);
            $areas = Area::all();
            $countries = Country::all();
            return view('admin.area.edit', compact('area', 'areas', 'countries'));
        /*}
        return redirect(route('admin.home'));*/
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
            'name' => 'required',
            'slug' => 'required',
        ]);

        $area = Area::find($id);
        $area->name = $request->name;
        $area->slug = $request->slug;
        $area->status = $request->status;

        $area->save();
        return redirect(route('area.index'))->with('toast_success', 'Area updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Area::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Area deleted successfully.');
    }
}
