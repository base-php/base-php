<?php

namespace App\Controllers;

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
	 * @return view
	 */
    public function index()
    {
        return view('dashboard/index');
    }
}
