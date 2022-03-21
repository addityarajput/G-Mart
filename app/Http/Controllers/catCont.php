<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catCont extends Controller
{
   public function addcat()
   {
       return view('addCat');
   }
   public function updateSettings(Request $request)
   {
       $request->validate([
           'CategoryName' => 'required',
           'CategoryId' => 'required',
           

       ]);

       $data = [
           'CategoryName' => $request->get('CategoryName'),
           'CategoryId' =>$request->get('CategoryId'),
          
       ];
       DB::table('cat')->truncate();
      SiteSetting::insert($data);
      return redirect()->back();
   }

}
