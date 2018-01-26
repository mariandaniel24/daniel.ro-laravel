<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioImages extends Model
{
    protected $visible = ['image_url'];
    
    public function portfolio() {
        return $this->belongsTo(Portfolio::class);
    }

}
