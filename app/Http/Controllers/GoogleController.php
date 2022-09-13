<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use App\Mail\getDetails;
class GoogleController extends Controller
{
    //
    public function index(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $mob=$request->input('mob');
        $course=$request->input('course');
        $level=$request->input('level');
        $mode=$request->input('mode');
        $batch_pref=$request->input('batch_pref');
        $hdyk=$request->input('hdyk');
        $data=['name'=>$name,'email'=>$email,'mob'=>$mob,'course'=>$course,'level'=>$level,'mode'=>$mode,'batch_pref'=>$batch_pref,'hdyk'=>$hdyk];
        Mail::to($email)->send(new sendMail($data));
        Mail::to('shubhamjoshi199826@gmail.com')->send(new getDetails($data));
        return view('contact_us');
    }
}
