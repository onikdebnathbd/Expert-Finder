<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\User\Ad;
use App\Models\User\Profession;
use App\Models\User\Education;
use Illuminate\Http\Request;
use App\User;
use App\Models\Admin\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    public function profile()
    {
        return view('user.accounts.profile');
    }
    public function showSettingsForm()
    {
        $user = User::with('categories')->find(Auth::user()->id);
        $roles = Role::all();
        $categories = Category::all();
        return view('user.accounts.settings', compact('user','roles', 'categories'));
    }
    public function settings(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            /*'phone' => 'required|numeric',*/
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $user =  User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->slug = $request->slug;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->visibility = $request->visibility;
        $user->save();
        $user->roles()->sync($request->role);
        $user->categories()->sync($request->category);
        return redirect(route('profile'))->with('toast_success', 'Profile updated successfully.');
    }

    public function showProfessionForm() {
        return view('user.accounts.profession');
    }
    public function profession(Request $request) {
        $profession =  Profession::find(Auth::user()->profession->id);
        $profession->skill = $request->skill;
        $profession->experience = $request->experience;
        $profession->visibility = $request->visibility;
        $profession->save();
        return redirect(route('profile'))->with('toast_success', 'Professional info updated successfully.');
    }
    public function showEducationForm() {
        return view('user.accounts.education');
    }
    public function education() {

    }
    public function ad() {
        return view('user.accounts.ad');
    }
}