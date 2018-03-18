<?php

namespace App\Http\Controllers;

use App;
use App\Portfolio;
use App\Statistics;

class HomeController extends Controller
{
    public function index()
    {
        $portfolio_data = Portfolio::with('images')->get();
        $statistics_data = Statistics::all();

        // fetch all portfolios and their images

        return view('layout', compact(['portfolio_data', 'statistics_data']));
    }

}
