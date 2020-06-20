<?php

namespace App\Http\Controllers\Admin;

use App\models\admin\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Role;
use App\Models\Admin\Permission;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        /*$this->middleware('can:users.role');*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('roles.viewAny')) {
            $roles = Role::orderBy('created_at', 'DESC')->get();
            $countries = Country::all();
            return view('admin.role.show', compact('roles', 'countries'));
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
        if (Auth::user()->can('roles.create')) {
            $permissions = Permission::all();
            $countries = Country::all();
            return view('admin.role.create', compact('permissions', 'countries'));
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
            'name' => 'required|max:50|unique:roles'
        ]);

        $role = new Role;
        $role->name = $request->name;

        $role->save();
        $role->permissions()->sync($request->permission);
        return redirect(route('role.index'))->with('toast_success', 'Role created successfully.');
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
        if (Auth::user()->can('roles.update')) {
            $role = Role::find($id);
            $permissions = Permission::all();
            $countries = Country::all();
            return view('admin.role.edit', compact('role','permissions', 'countries'));
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
            'name' => 'required|max:50'
        ]);

        $role = Role::find($id);
        $role->name = $request->name;

        $role->save();
        $role->permissions()->sync($request->permission);
        return redirect(route('role.index'))->with('toast_success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Role deleted successfully.');
    }
}
