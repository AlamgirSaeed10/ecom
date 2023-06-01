<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function sendEmail(Request $request)
    {
        $testMailData = [
            'name' => $request->name,
            'father_name' => $request->father_name,
            'cnic_number' => $request->cnic_number,
            'number' => $request->number,
            'city' => $request->city,
            'email' => $request->email,
            'gender' => $request->gender,
            'traninig_mood' => $request->traninig_mood,
            'payment' => $request->payment,
            'desired_courses' => $request->desired_courses,
        ];

        Mail::to('adilmaqsood2244@gmail.com')->send(new SendMail($testMailData));

    }
}
