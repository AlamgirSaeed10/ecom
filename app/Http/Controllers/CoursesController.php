<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CoursesController extends Controller
{
    function courses(){
        $title = "Our Courses";
        return view('ecom.courses',compact('title'));
    }
    function add_courses(){
        $title = "Our Courses";
        return view('admin.add-courses',compact('title'));
    }
    function view_courses(){
        $title = "Our Courses";
        return view('admin.view-courses',compact('title'));
    }
    public function store_courses(Request $request){
        $image = $request->file('CourseImage');
        $request->validate([
            'CourseCode'=>'required',
            'CourseImage'=>'required|image|mimes:jpeg,png,jpg,gif|max:4096',
            'CourseName'=>'required',
            'CourseDescription'=>'required',
            'CourseStartDate'=>'required',
            'CourseEndDate'=>'required',
        ]);

        $cleanedName = $request->CourseCode.'-'.$request->CourseName.'.'.$image->getClientOriginalExtension();
        $imageName = str_replace(' ', ' ', $cleanedName);
        $image->move(public_path('admin/assets/uploads/courses/'), $imageName);

        $course_data= [
            'CourseCode'=>$request->CourseCode,
            'CourseImage'=>$imageName,
            'CourseName'=>$request->CourseName,
            'CourseDescription'=>$request->CourseDescription,
            'CourseStartDate'=>$request->CourseStartDate,
            'CourseEndDate'=>$request->CourseEndDate,
                ];
                DB::table('courses')->insert($course_data);
                return redirect()->back()->with('success','Course has been added successfully!');
    }
}
