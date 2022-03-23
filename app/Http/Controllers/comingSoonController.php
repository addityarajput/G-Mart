<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comingSoonController extends Controller
{
    public function soon()
    {
        return view('userFea.comingsoon.coming');
    }
}
