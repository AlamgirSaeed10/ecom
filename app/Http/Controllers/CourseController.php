<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    function certificate(){
        $title = 'Verify Certificate';
        return view('verify-certificate.certificate',compact('title'));
    }
    function verify_certificate(Request $request){
        $CertID = $request->CertificateNo;
        $verify=DB::table('certificates')->where('CertificateNo',$CertID)->get();
        return view('verify-certificate.verify-certificate',compact('verify'));
    }
}
