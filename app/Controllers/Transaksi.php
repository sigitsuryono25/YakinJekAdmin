<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{
	public function index()
	{
		$master['page'] = view('transaksi/transaksi');
		return view('templates', $master);
	}
	public function invoice()
	{
		$master['page'] = view('transaksi/invoice');
		return view('templates', $master);
	}
}
