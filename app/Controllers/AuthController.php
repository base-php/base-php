<?php

namespace App\Controllers;

use App\Mails\PasswordRecoveryEmail;
use App\Models\User;
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
            $email = User::where('email', request('email'))->get();

            if ($email->count() > 0) {
                return redirect('/register')->with('error', lang('auth.email_verified_error'));
            }

            if (request('password') != request('confirm_password')) {
                return redirect('/register')->with('error', lang('auth.password_not_match'));
            }

            $user = User::create([
                'name'          => request('name'),
                'email'         => request('email'),
                'password'      => request('password'),
                'date_create'   => now('Y-m-d H:i:s'),
                'date_update'   => now('Y-m-d H:i:s')
            ]);

            $user->update(['hash' => encrypt($user->id)]);

            return redirect('/login')->with('info', lang('auth.register_success'));
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
        $user = User::where('email', request('email'))
            ->where('password', encrypt(request('password')))
            ->whereNull('oauth')
            ->first();

        if ($user) {
            session('id', $user->id);

            $redirect = request('redirect') ? request('redirect') : $this->redirect_login;

            return redirect($redirect);
        }

        return redirect('/login')->with('error', lang('auth.incorrect_data'));
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
            $user = User::where('email', request('email'))->first();

            if (!$user) {
                return redirect('/forgot-password')->with('error', lang('auth.email_not_match'));
            }

            email($user->email, new PasswordRecoveryEmail($user));

            return redirect('/forgot-password')->with('info', lang('auth.check_email'));
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
            $user = User::where('hash', request('id'))->first();

            if (!$user) {
                return redirect('/login')->with('error', lang('auth.link_invalid'));
            }

            if (request('password') != request('confirm_password')) {
                return redirect('/recover/' . request('id'))->with('error', 'Las contraseñas no coinciden.');
            }

            $user->password = encrypt(request('password'));
            $user->save();

            return redirect('/login')->with('info', lang('auth.password_not_match'));
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
            $two_fa = new TwoFA;
            return $two_fa->verify();
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
        session()->delete();
        return redirect('/login');
    }
}
