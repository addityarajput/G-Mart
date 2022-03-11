<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function add()
    {
        return view('Addproduct');
    }


    public function updateSettings(Request $request)
    {
        $request->validate([
            'ProductName' => 'required',
            'ProductId' => 'required',
            'ProductPrice' => 'required',
            'ProductImage' => 'required',
           
        ]);

        $data = [
            'ProudctName' => $request->get('ProductName'),
            'ProductId' => $request->get('ProductId'),
            'ProductPrice' => $request->get('ProductPrice'),
            'ProductImage' => $request->get('ProductImage'),
            
        ];
        DB::table('add_product')->truncate();
       SiteSetting::insert($data);
       return redirect()->back();
    }

}


