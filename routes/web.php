<?php

//Admin Routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function (){
    //home route
    Route::get('home', 'HomeController@index')->name('admin.home');

    //profile route
    Route::get('profile/my-account', 'HomeController@my_account')->name('admin.profile.my-account');
    Route::get('profile/settings', 'HomeController@settings')->name('admin.profile.settings');
    Route::post('profile/settings', 'HomeController@update_profile');


    //Login route
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');

    //Additional routes with resource routes:
    //division route
    Route::get('division/country/{country}', 'DivisionController@all')->name('division.all');

    //Resource Routes:
    Route::resources([
        //admin route
        'admin' => 'AdminController',
        //role route
        'role' => 'RoleController',
        //permission route
        'permission' => 'PermissionController',
        //category route
        'category' => 'CategoryController',
        //country route
        'country' => 'CountryController',
        //division route
        'division' => 'DivisionController',
        //district route
        'district' => 'DistrictController',
        //area route
        'area' => 'AreaController'
    ]);
});

//User Routes
//User authentication route
Auth::routes();
/*Route::get('/register/role', 'Auth\RegisterController@showRoleForm')->name('showRoleForm');*/
//Main routes
Route::group(['namespace' => 'User'], function (){
    Route::resources([
        //user route
        'user' => 'UserController',
    ]);
    //HomeController
    Route::get('/', 'HomeController@welcome')->name('welcome');
    Route::get('about', 'HomeController@about')->name('about');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::get('/expert', 'HomeController@allExpert')->name('all-expert');
    Route::get('expert/{expert}', 'HomeController@expert')->name('expert');
    Route::get('/job', 'HomeController@allJob')->name('all-job');
    Route::get('job/{job}', 'HomeController@job')->name('job');
    /*Route::get('job', 'HomeController@client')->name('client');*/
    Route::get('home', 'HomeController@dashboard')->name('home');

    //UserController
    Route::get('accounts/profile', 'UserController@profile')->name('profile');
    Route::get('accounts/settings', 'UserController@showSettingsForm')->name('settings');
    Route::post('accounts/settings', 'UserController@settings');
    Route::get('accounts/profession', 'UserController@showProfessionForm')->name('profession');
    Route::post('accounts/profession', 'UserController@profession');
    Route::get('accounts/education', 'UserController@showEducationForm')->name('education');
    Route::post('accounts/education', 'UserController@education');
    Route::get('accounts/ad', 'UserController@ad')->name('ad');

    //AdController
    Route::resources([
        'ad' => 'AdController'
    ]);

    /*Route::get('profile', 'HomeController@profile')->name('profile');
    Route::get('about', 'HomeController@about')->name('about');
    Route::get('contact', 'HomeController@showContactForm')->name('contact');
    Route::post('contact', 'HomeController@contact');*/
});