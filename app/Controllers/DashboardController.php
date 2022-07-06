<?php

namespace App\Controllers;

use View;

class DashboardController extends Controller
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
