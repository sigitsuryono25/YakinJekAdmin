<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Customer extends BaseController
{
	public function index()
	{
		$master['page'] = view('users/user');
		return view('templates', $master);
	}
}
