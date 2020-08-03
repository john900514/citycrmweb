<?php

namespace CityCRM\Http\Controllers\Auth;

use Backpack\Base\app\Http\Controllers\Controller;
use CityCRM\DemoTokens;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $data = []; // the information we send to the view

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
    use AuthenticatesUsers {
        logout as defaultLogout;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $guard = backpack_guard_name();

        $this->middleware("guest:$guard", ['except' => 'logout']);

        // ----------------------------------
        // Use the admin prefix in all routes
        // ----------------------------------

        // If not logged in redirect here.
        $this->loginPath = property_exists($this, 'loginPath') ? $this->loginPath
            : backpack_url('login');

        // Redirect here after successful login.
        $this->redirectTo = property_exists($this, 'redirectTo') ? $this->redirectTo
            : backpack_url('dashboard');

        // Redirect here after logout.
        $this->redirectAfterLogout = property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout
            : backpack_url();
    }

    /**
     * Return custom username for authentication.
     *
     * @return string
     */
    public function username()
    {
        return backpack_authentication_column();
    }

    /**
     * Log the user out and redirect him to specific location.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        // Do the default logout procedure
        $this->guard()->logout();

        // And redirect to custom location
        return redirect($this->redirectAfterLogout);
    }

    /**
     * Get the guard to be used during logout.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return backpack_auth();
    }

    // -------------------------------------------------------
    // Laravel overwrites for loading backpack views
    // -------------------------------------------------------

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        $this->data['title'] = 'Employee/Client '.trans('backpack::base.login'); // set the page title
        $this->data['username'] = $this->username();

        return view('backpack::auth.login', $this->data);
    }

    public function client_login(Request $request, DemoTokens $tokens)
    {
        $data = $request->all();

        if(array_key_exists('access-token', $data) && (!is_null($data['access-token'])))
        {
            // check the tokens table and redirect if valid.
            $demo_token = $tokens->find($data['access-token']);

            if(!is_null($demo_token))
            {
                return redirect($demo_token->demo_url.'/autologin?v='.$demo_token->client_id);
            }
            else
            {
                $errors = ['client-login' => ['Invalid access token']];

                return redirect()->back()->withErrors($errors);
            }
        }
        else
        {
            $errors = ['client-login' => ['Missing access token']];

            return redirect()->back()->withErrors($errors);
        }
    }
}
