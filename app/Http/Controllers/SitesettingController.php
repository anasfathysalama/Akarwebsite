<?php

namespace App\Http\Controllers;

use App\SiteSetting;


use Illuminate\Http\Request;

class SitesettingController extends Controller
{
    public function index()
    {

        $siteSetting = new SiteSetting();
        $siteSetting = $siteSetting->all();
        return view('admin.setting.index' , compact('siteSetting' ));
    }
}
