<?php

namespace App\Controllers;

use View;

class Home extends Controller
{
	/**
	 * Show home page.
	 *
	 * @return View
	 */
    public function index(): View
    {
        return view('home/index');
    }
}
