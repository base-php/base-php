<?php

namespace App\Controllers;

use Facebook;
use Google;
use Redirect;
use View;

class Auth extends Controller
{
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
    public function register()
    {
        if (post()) {
            return register(request());
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
        return login(request());
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
    public function forgot_password()
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
    public function recover($id)
    {
        if (post()) {
            return recover();
        }

        return view('auth.recover', compact('id'));
    }

    /**
     * Logout user.
     *
     * @return Redirect
     */
    public function logout(): Redirect
    {
        logout();
        return redirect('/login');
    }
}
