<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request){
        $testing=$request->input('lang_name');
        session()->put('language',$testing);
        return view('course_details');
    }
}

?>