<?php

namespace App\Controllers;

use App\Models\User;
use App\Validations\UserStore;
use App\Validations\UserUpdate;
use Redirect;
use View;

class Users extends Controller
{
    /**
     * Verify if user is logged.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Auth');
    }

    /**
     * Show home page.
     *
     * @return View
     */
    public function index(): View
    {
        $users = User::get();
        return view('users.index', compact('users'));
    }

    /**
     * Show create user page.
     *
     * @return View
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * Store user in database.
     *
     * @return Redirect
     */
    public function store(UserStore $validation): Redirect
    {
        $file = request('photo')->save('resources/assets/img');

        $user = User::create([
            'name'          => request('name'),
            'email'         => request('email'),
            'password'      => md5(request('password')),
            'photo'         => $file->filename,
            'date_create'   => now('Y-m-d H:i:s'),
            'date_update'   => now('Y-m-d H:i:s')
        ]);

        $user->update(['hash' => md5($user->id)]);

        return redirect('/dashboard/users')->with('info', __('users.store'));
    }

    /**
     * Show edit user page.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update user in database.
     *
     * @return Redirect
     */
    public function update(UserUpdate $validation): Redirect
    {
        $file = request('photo')->save('resources/assets/img');

        $user = User::find(request('id'));
        $user->update([
            'name'  => request('name'),
            'email' => request('email'),
            'date_update'   => now('Y-m-d H:i:s')
        ]);

        if (request('password')) {
            $user->update([
                'password' => md5(request('password')),
            ]);
        }

        if ($file->filename != '') {
            $user->update([
                'photo' => $file->filename,
            ]);
        }

        if ($user->id == session('id')) {
            session('name', $user->name);
            session('photo', $user->photo);
        }

        return redirect('/dashboard/users')->with('info', __('users.update'));
    }

    /**
     * Delete user in database.
     *
     * @param int $id
     * @return Redirect
     */
    public function delete(int $id): Redirect
    {
        if ($id == session('id')) {
            return redirect('/dashboard/users')->with('error', __('users.in_use'));
        }

        User::find($id)->delete();

        return redirect('/dashboard/users')->with('info', __('users.delete'));
    }
}
