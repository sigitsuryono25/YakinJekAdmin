<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mitra extends BaseController
{
	public function index()
	{
		$master['page'] = view('mitra/mitra');
		return view('templates', $master);
	}
}
