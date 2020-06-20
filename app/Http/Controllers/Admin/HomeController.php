<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User\Post;
use App\Models\User\Category;
use App\Models\User\Tag;
use App\Models\Admin\Admin;
use App\Models\Admin\Role;
use App\Models\Admin\Permission;
use App\models\Admin\Country;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

   public function index() {
       $countries = Country::all();
       return view('admin.home', compact('countries'));
   }

   public function my_account() {
       $countries = Country::all();
       $roles = Role::orderBy('created_at', 'DESC')->get();
       return view('admin.profile.my-account', compact('roles', 'countries'));
   }

    public function settings() {
        $countries = Country::all();
        return view('admin.profile.settings', compact('countries'));
    }

   public function update_profile(Request $request) {
    $request->validate([
           'name' => 'required|string|max:255',
           'phone' => 'required|numeric',
           'password' => 'nullable|string|min:6|confirmed',
       ]);

       $admin =  Admin::find(Auth::user()->id);
       $admin->name = $request->name;
       $admin->phone = $request->phone;
       $admin->password = bcrypt($request->password);

       $admin->save();
       return redirect(route('admin.profile.my-account'))->with('toast_success', 'Profile updated successfully.');

   }
}
