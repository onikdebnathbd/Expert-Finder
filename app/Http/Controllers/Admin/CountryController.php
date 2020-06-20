<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Country;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
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
        if (Auth::user()->can('countries.viewAny')) {
            $countries = Country::orderBy('created_at', 'DESC')->get();
            return view('admin.country.show')->with('countries', $countries);
        }
        return redirect(route('admin.home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('countries.create')) {
            $countries = Country::all();
            return view('admin.country.create', compact('countries'));
        }
        return redirect(route('admin.home'));
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

        $country = new Country;
        $country->name = $request->name;
        $country->slug = $request->slug;
        $country->status = $request->status;

        $country->save();
        return redirect(route('country.index'))->with('toast_success', 'Country created successfully.');
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
        if (Auth::user()->can('countries.create')) {
            $country = Country::find($id);
            $countries = Country::all();
            return view('admin.country.edit', compact('country', 'countries'));
        }
        return redirect(route('admin.home'));
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

        $country = Country::find($id);
        $country->name = $request->name;
        $country->slug = $request->slug;
        $country->status = $request->status;

        $country->save();
        return redirect(route('country.index'))->with('toast_success', 'Country updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Country::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Country deleted successfully.');
    }
}
