<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$master['page'] = view('dashboard/dashboard');
		return view('templates', $master);
	}
}
