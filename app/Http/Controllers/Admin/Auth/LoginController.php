<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirectTo = 'admin/home';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('admin/login')->with('toast_success', 'You have successfully logged out.');
    }


    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $admin_count = Admin::where('email', $request->email)->count();
        $admin = Admin::where('email', $request->email)->first();

        if ( $admin_count != 0 ) {
            if ($admin->status == 0) {
                return ['email' => 'inactive', 'password' => 'You are not an active person, please contact with admin.'];
            } else {
                return ['email' => $request->email, 'password' => $request->password, 'status' => 1];
            }
        }
        return $request->only($this->username(), 'password');
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        $fiels = $this->credentials($request);
       if ($fiels['email'] == 'inactive') {
           throw ValidationException::withMessages([
               $this->username() => $fiels['password'],
           ]);
       } else {
           throw ValidationException::withMessages([
               $this->username() => [trans('auth.failed')],
           ]);
       }
    }
}
