<?php

namespace App\Controllers;

class Home extends Controller
{
	/**
	 * Show home page.
	 *
	 * @return view
	 */
    public function index()
    {
        return view('home/index');
    }
}
