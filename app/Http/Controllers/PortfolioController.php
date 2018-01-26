<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioImages;

class PortfolioController extends Controller
{

    public function index()
    {
        return Portfolio::with('images')->get();

    }

// get data from portfolio model - id
    public function show($id)
    {
        // return Portfolio::find($id)->images;
        $data = Portfolio::find($id);
        $data->images; 

         return $data;
    }



    public function create($id) {
        
    }

}
