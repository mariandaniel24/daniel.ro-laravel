<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Portfolio extends Model
{
	protected $hidden = ['created_at', 'updated_at'];

	public function images() {
		return $this->hasMany(PortfolioImages::class);  // App\PortfolioImages
	}

}
