<?php

namespace App\Controllers;

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
        return view('auth/login');
    }

    /**
     * Show register form.
     *
     * @return View
     */
    public function register()
    {
        if (post()) {
            return register(request());
        }

        return view('auth/register');
    }

    /**
     * Login user.
     *
     * @return login
     */
    public function login()
    {
        return login(request());
    }

    /**
     * Login user with Facebook account.
     *
     * @return google
     */
    public function facebook()
    {
        return facebook()->login();
    }

    /**
     * Login user with Google account.
     *
     * @return google
     */
    public function google()
    {
        return google()->login();
    }

    /**
     * Show and process forgot password form.
     *
     * @return View|forgot
     */
    public function forgot_password()
    {
        if (post()) {
            return forgot();
        }

        return view('auth/forgot-password');
    }

    /**
     * Show and process recover password form.
     *
     * @param string $id
     * @return View|recover
     */
    public function recover(string $id)
    {
        if (post()) {
            return recover();
        }

        return view('auth/recover', compact('id'));
    }

    /**
     * Logout user.
     *
     * @return redirect
     */
    public function logout()
    {
        logout();
        return redirect('/login');
    }
}
