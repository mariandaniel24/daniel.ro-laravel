<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class HomeController extends Controller
{
	public function index() {
		$portfolio_data = Portfolio::allModel();
		return view('home/index', compact('portfolio_data'));
	}


}
