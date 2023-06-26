<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $title = "Dashboard";
        return view("admin.dashboard",compact('title'));
    }
    function add_certificate(){
        $title = "certificate";
        return view('admin.add-certificate',compact('title'));
    }
    function view_certificate(){

        $view_certificate = DB::table('certificates')->get();
        $title = "certificate";
        return view('admin.view-certificate',compact('title','view_certificate'));
    }

    public function show_certificate($certificateNo)
    {
        $show = DB::table('certificates')->where('CertificateNo',$certificateNo)->get();

        return $show;
    }

    function add_enrollment(){
        $title = "enrollment";
        return view('admin.add-enrollment',compact('title'));
    }
    function view_enrollment(){
        $title = "enrollment";
        return view('admin.view-enrollment',compact('title'));
    }
    function add_membership(){
        $title = "membership";
        return view('admin.add-membership',compact('title'));
    }
    function view_membership(){
        $title = "membership";
        return view('admin.view-membership',compact('title'));
    }
    function view_report(){
        $title = "report";
        return view('admin.view-report',compact('title'));
    }

    public function getStudentData($studentID){
        $studentData = DB::table('courses')
                    ->select('CourseName')
                    ->where('StudentID', $studentID)
                    ->get();
            $options = "";
            foreach ($studentData as $data) {
                // $courses[] = $data->name;

                $options .= "<option value='$data->CourseName'>$data->CourseName</option>";
            }
            $selectBox = "<select class='form-control select2'>";
            $selectBox .= "<option selected>Select a course</option>";
            $selectBox .= $options;
            $selectBox .= "</select>";
            return response()->json($selectBox);

    }


    function store_certificate(Request $request){

        $image = $request->file('CertificateImage');
        $request->validate([
            'StudentID'=>'required',
            'CertificateNo'=>'required',
            'CertificateVerificationCode'=>'required',
            'StartingDate'=>'required',
            'CompilitionDate'=>'required',
            'EnrolledCourse'=>'required',
            'CertificateImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);


        $cleanedName = $request->StudentID.'-'.$request->EnrolledCourse.'.'.$image->getClientOriginalExtension();
        $imageName = str_replace(' ', ' ', $cleanedName);
        $image->move(public_path('admin/assets/uploads/'), $imageName);
        $certificate_data = array(
            'StudentID'=>$request->StudentID,
            'CertificateNo'=>$request->CertificateNo,
            'CertificateVerificationCode'=>$request->CertificateVerificationCode,
            'StartingDate'=>$request->StartingDate,
            'CompilitionDate'=>$request->CompilitionDate,
            'EnrolledCourse'=>$request->EnrolledCourse,
            'CertificateImage' => $imageName
        );

        DB::table('certificates')->insert($certificate_data);
        return back()->with('success', 'Certificate data has been uploaded successfully.');
    }



}
