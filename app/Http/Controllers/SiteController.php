<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $whycs_data=json_decode(file_get_contents("json/whychooseus.json"),true);
        echo "<pre>";
        print_r($whycs_data);
    }
}
