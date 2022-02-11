<?php

namespace App\Controllers;

use App\Models\User;
use View;

class Dashboard extends Controller
{
	/**
	 * Verify if user is logged.
	 *
	 * @return auth
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
        return view('dashboard.index');
    }
}
