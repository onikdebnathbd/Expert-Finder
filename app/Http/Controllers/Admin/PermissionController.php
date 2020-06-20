<?php

namespace App\Http\Controllers\Admin;

use App\models\admin\Country;
use App\Models\Admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        /*$this->middleware('can:users.permission');*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('permissions.viewAny')) {
            $permissions = Permission::orderBy('created_at', 'DESC')->get();
            $countries = Country::all();
            return view('admin.permission.show', compact('permissions', 'countries'));
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
        if (Auth::user()->can('permissions.create')) {
            $countries = Country::all();
            return view('admin.permission.create', compact('countries'));
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
            'name' => 'required|max:50|unique:permissions',
            'for' => 'required'
        ]);

        $permission = new Permission;
        $permission->name = $request->name;
        $permission->for = $request->for;

        $permission->save();
        return redirect(route('permission.index'))->with('toast_success', 'Permission created successfully.');
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
        if (Auth::user()->can('permissions.update')) {
            $permission = Permission::find($id);
            $countries = Country::all();
            return view('admin.permission.edit', compact('permission', 'countries'));
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
            'name' => 'required|max:50',
            'for' => 'required'
        ]);

        $permission =Permission::find($id);
        $permission->name = $request->name;
        $permission->for = $request->for;


        $permission->save();
        return redirect(route('permission.index'))->with('toast_success', 'Permission updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Permission deleted successfully.');
    }
}
