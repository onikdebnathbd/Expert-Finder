<?php

namespace App\Http\Controllers\Admin;

use App\models\admin\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\District;
use Illuminate\Support\Facades\Auth;

class DistrictController extends Controller
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
        /*if (Auth::user()->can('districts.viewAny')) {*/
        $districts = District::all();
        $countries = Country::all();
        /*foreach ($districts as $district) {
            return $district->division->country->name;
        }*/
        return view('admin.district.show', compact('districts', 'countries'));
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
        /*if (Auth::user()->can('districts.create')) {*/
            $districts = District::all();
            $countries = Country::all();
            return view('admin.district.create', compact('districts', 'countries'));
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

        $district = new District;
        $district->name = $request->name;
        $district->slug = $request->slug;
        $district->status = $request->status;

        $district->save();
        return redirect(route('district.index'))->with('toast_success', 'District created successfully.');
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
        /*if (Auth::user()->can('districts.create')) {*/
            $district = District::find($id);
            $districts = District::all();
            $countries = Country::all();
            return view('admin.district.edit', compact('district', 'districts', 'countries'));
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

        $district = District::find($id);
        $district->name = $request->name;
        $district->slug = $request->slug;
        $district->status = $request->status;

        $district->save();
        return redirect(route('district.index'))->with('toast_success', 'District updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        District::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'District deleted successfully.');
    }
}
