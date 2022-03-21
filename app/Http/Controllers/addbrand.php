<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addbrand extends Controller
{
    public function brand()
    {
        return view('addBrand');
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
            'BrandName' => $request->get('ProductName'),
            'BrandSlogan' => $request->get('ProductId'),
            'BrandId' =>$request->get('BrandId'),
            'BrandLogo' => $request->get('BrandLogo'),

        ];
        DB::table('add_Brand')->truncate();
       SiteSetting::insert($data);
       return redirect()->back();
    }

}
