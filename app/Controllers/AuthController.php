<?php

namespace App\Controllers;

use Auth;
use Facebook;
use Google;
use Redirect;
use View;

class AuthController extends Controller
{
    /**
     * Where the user will be redirected when they log in.
     *
     * @var string
     */
    public $redirect_login = '/dashboard';


    /**
     * Show login form.
     *
     * @return View
     */
    public function index(): View
    {
        return view('auth.login');
    }

    /**
     * Show register form.
     *
     * @return View|Redirect
     */
    public function register(): View|Redirect
    {
        if (post()) {
            return Auth::register(request());
        }

        return view('auth.register');
    }

    /**
     * Login user.
     *
     * @return Redirect
     */
    public function login(): Redirect
    {
        return Auth::login(request());
    }

    /**
     * Login user with Facebook account.
     *
     * @return Facebook
     */
    public function facebook(): ?Facebook
    {
        return facebook()->login();
    }

    /**
     * Login user with Google account.
     *
     * @return Google
     */
    public function google(): ?Google
    {
        return google()->login();
    }

    /**
     * Show and process forgot password form.
     *
     * @return View|Redirect
     */
    public function forgot_password(): View|Redirect
    {
        if (post()) {
            return forgot();
        }

        return view('auth.forgot-password');
    }

    /**
     * Show and process recover password form.
     *
     * @param string $id
     * @return View|Redirect
     */
    public function recover(string $id): View|Redirect
    {
        if (post()) {
            return Auth::recover();
        }

        return view('auth.recover', compact('id'));
    }

    /**
     * Show and process 2fa form.
     *
     * @param string $id
     * @return View|Redirect
     */
    public function two_fa(string $id): View|Redirect
    {
        if (post()) {
            return two_fa();
        }

        return view('auth.2fa', compact('id'));
    }

    /**
     * Logout user.
     *
     * @return Redirect
     */
    public function logout(): Redirect
    {
        Auth::logout();
        return redirect('/login');
    }
}
