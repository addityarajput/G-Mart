<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function catv()
    {
        return view('userFea.category.Category');
    }
}
