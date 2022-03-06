<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteSettingController extends Controller
{
    public function site(){
       $site =  SiteSetting::find(1);
       return view('site_setting', compact('site'));

    }


    public function updateSettings(Request $request)
    {
        $request->validate([
            'site_setting' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'slogan' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'copyright' => 'required',
        ]);

        $data = [
            'site_name' => $request->get('site_setting'),
            'phone' => $request->get('phone'),
            'mobile' => $request->get('mobile'),
            'slogan' => $request->get('slogan'),
            'facebook' => $request->get('facebook'),
            'instagram' => $request->get('instagram'),
            'linkedin' => $request->get('linkedin'),
            'copyright' => $request->get('copyright'),
            'site_logo' => $request->get('logo'),
        ];
        DB::table('site_settings')->truncate();
       SiteSetting::insert($data);
       return redirect()->back();
    }
}
