<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke()
    {
        return view('shop.index');
    }
}
