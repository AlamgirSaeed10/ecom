<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;

class EnrollmentController extends Controller
{

    public function enrollment(){
        return view('enrollment');
    }

    public function post_enrollment(Request $request){

        $en_data = $request->validate([
            'PlanID'=>'required',
            'CourseCode' =>'required',
            'StudentID'=>'required',
            'StudentName'=>'required',
            'FatherName'=>'required',
            'StudentCNIC'=>'required',
            'StudentPhone'=>'required',
            'StudentCity'=>'required',
            'StudentEmail'=>'required',
            'StudentGender'=>'required',
            'TrainingMode'=>'required',
            'PaymentOption'=>'required',
            'KnowAboutUs'=>'required',
        ]);
        $invoiceNo = Str::replaceFirst('STU', 'INV', $request->StudentID);
        $plan = DB::table('course_plan')->where('PlanID',$request->PlanID)->get();
        $enroll_cnic = DB::table('enrollment')->where('StudentCNIC',$request->StudentCNIC)->get();

        $inv_data = [
            'InvoiceNo' => $invoiceNo,
            'PaymantAmount'=>$plan[0]->PricePKR,
            'PaymentType' => $request->PaymentOption,
            'PaymantDate' =>Carbon::now()->addDays(7)->format('Y-m-d'),
            'PaymentStatus' =>'Pending',
            'PlanType' =>$plan[0]->PlanType,
            'StudentID' =>$request->StudentID,
            'CourseCode' =>$request->CourseCode,
        ];


        if(count($enroll_cnic) > 0 ){
            return redirect()->route('enrollment')->with('error', 'Student already registered with this CNIC.');
        }


   if(count($en_data) > 0 && count($inv_data) > 0){
        DB::table('enrollment')->insert($en_data);
        DB::table('course_payment')->insert($inv_data);
        return redirect()->route('enrollment')->with('success', 'Enrollment created successfully');
    }
     else{
        return redirect()->route('enrollment')->with('error', 'Error During enrollment... Please contact administrator');
    }

    }

}
