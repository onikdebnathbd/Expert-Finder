<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Ad;
use App\User;
use App\Models\Admin\Role;
use App\Models\Admin\Category;

class HomeController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    public function welcome()
    {
        $categories = Category::all();
        return view('user.welcome', compact('categories'));
    }

    public function allExpert()
    {
        $expert_count = Role::find(5)->users->count();
        $experts = Role::find(5);
        $categories = Category::all();
        return view('user.expert.all', compact('expert_count', 'experts', 'categories'));
    }

    public function expert(User $expert)
    {
        return view('user.expert.single', compact('expert'));
    }

    public function allJob()
    {
        $ad_count = Ad::all()->count();
        $ads = Ad::all();
        $categories = Category::all();
        return view('user.client.ad.all', compact('ad_count', 'ads', 'categories'));
    }

    public function job(Ad $job)
    {
        return view('user.client.ad.single', compact('job'));
    }

    public function dashboard()
    {
        return view('user.home');
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }
}
