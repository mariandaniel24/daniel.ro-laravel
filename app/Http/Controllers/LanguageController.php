<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Support\Facades\Crypt;

class LanguageController extends Controller
{

    public function setLocale($locale)
    {
        Cookie::queue(Cookie::forever('locale', $locale));
        return back();
    }
}
