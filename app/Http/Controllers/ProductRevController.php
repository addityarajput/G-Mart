<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductRevController extends Controller
{
    public function rev()
    {
        return view('productReview.productRev');
    }
}
