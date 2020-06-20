<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Division;
use Illuminate\Support\Facades\Auth;

class DivisionController extends Controller
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
    public function all(Country $country)
    {
        /*if (Auth::user()->can('divisions.viewAny')) {*/
        $countries = Country::all();
        $divisions = $country->division;
        /*foreach ($divisions as $division) {
            echo $division->name;
        }*/
        return view('admin.division.show', compact('countries', 'divisions'));
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
        /*if (Auth::user()->can('divisions.create')) {*/
            $countries = Country::all();
            return view('admin.division.create', compact('countries'));
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
        /*$request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);*/

        /*$division = new Division;
        $division->name = $request->name;
        $division->slug = $request->slug;
        $division->status = $request->status;

        $division->country()->sync($request->country);

        $division->save();*/
      /*  $division = Division::create($request->all());
        return $division->countries();*/


        /*return redirect(route('division.all', 'Bangladesh'))->with('toast_success', 'Division created successfully.');*/
        return $request->all();
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
        /*if (Auth::user()->can('divisions.create')) {*/
            $division = Division::find($id);
            $countries = Country::all();
            return view('admin.division.edit', compact('division', 'countries'));
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

        $division = Division::find($id);
        $division->name = $request->name;
        $division->slug = $request->slug;
        $division->status = $request->status;

        $division->save();
        return redirect(route('division.all'))->with('toast_success', 'Division updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Division::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Division deleted successfully.');
    }
}
