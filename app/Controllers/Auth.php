<?php

namespace App\Controllers;

class Auth extends Controller
{
    /**
     * Show login form.
     *
     * @return view
     */
    public function index()
    {
        return view('auth/login');
    }

    /**
     * Show register form.
     *
     * @return view
     */
    public function register()
    {
        return view('auth/register');
    }

    /**
     * Register user.
     *
     * @return logup
     */
    public function logup()
    {
        return logup(post());
    }

    /**
     * Login user.
     *
     * @return login
     */
    public function login()
    {
        return login(post());
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
     * @param view|forgot
     */
    public function forgot()
    {
        if (post()) {
            return forgot();
        }

        return view('auth/forgot');
    }

    /**
     * Show and process recover password form.
     *
     * @param view|recover
     */
    public function recover($id)
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
