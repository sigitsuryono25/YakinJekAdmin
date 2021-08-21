<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Merchant extends BaseController
{
	public function index()
	{
		$master['page'] = view('merchant/merchant');
		return view('templates', $master);
	}
}
