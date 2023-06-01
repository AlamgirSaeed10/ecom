<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    function certificate(){
        return view('verify-certificate.certificate');
    }
    function verify_certificate(Request $request){
        $CertID = $request->CertificateNo;
        $verify=DB::table('certificates')->where('CertificateNo',$CertID)->get();
        // dd($verify);
        return view('verify-certificate.verify-certificate',compact('verify'));
    }
}
