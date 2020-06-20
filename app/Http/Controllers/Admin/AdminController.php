<?php

namespace App\Http\Controllers\Admin;

use App\models\admin\Country;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Permission;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('admins.viewAny')) {
            $admins = Admin::orderBy('created_at', 'DESC')->get();
            $permissions= Permission::all();
            $countries = Country::all();
            return view('admin.admin.show', compact('admins', 'permissions', 'countries'));
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
        if (Auth::user()->can('admins.create')) {
            $roles = Role::all();
            $countries = Country::all();
            return view('admin.admin.create', compact('roles', 'countries'));
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
            'name' => 'required:roles|string|max:255',
            'email' => 'required|string|max:255|email|unique:admins',
            'phone' => 'required|numeric',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $request['password'] = bcrypt($request->password);
        $admin = Admin::create($request->all());
        $admin->roles()->sync($request->role);
        return redirect(route('profile'))->with('toast_success', 'Admin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->can('admins.create')) {
            $admin = Admin::find($id);
            $roles = Role::all();
            $countries = Country::all();
            return view('admin.admin.edit', compact('admin', 'roles', 'countries'));
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'phone' => 'required|numeric'
        ]);

        $request->status ? : $request['status'] = 0;

        $admin = Admin::where('id', $id)->update($request->except('_token', '_method','role'));
        Admin::find($id)->roles()->sync($request->role);
        return redirect(route('admin.index'))->with('toast_success', 'Admin updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Admin deleted successfully.');
    }
}
