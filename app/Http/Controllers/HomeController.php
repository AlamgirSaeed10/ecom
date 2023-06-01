<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Mail\ContactUsMail;
use App\Mail\SendMail;
use App\Models\Contact;
use App\Models\Enrollment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Requests\EnrollmentRequest;
use App\Http\Requests\MaintenanceRequest;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function courses()
    {
        return view('courses');
    }
    public function about()
    {
        return view('about');
    }
    public function enrollment()
    {
        return view('enrollment');
    }

    public function post_enrollment(EnrollmentRequest $request)
    {
        if (!$request->validated()) {

            $errors = $request->errors();
            return response()->json(['errors' => $errors]);
        }
        $data = $request->all();
        foreach ($request->course_selected as $course_selected) {
            if (!is_null($course_selected)) {
                $course_id[] = $course_selected;
            }
        }
        $data['course_id'] = ucwords(json_encode($course_id));
        $data['enrollment_code'] = 'enc-' . random_int(10000000000, 99999999999);
        $data['status'] = "Pending";
        // dd($course_id);
        if ($request->file('attach_doc')) {
            $attach_doc = $request->file('attach_doc');
            $path = $attach_doc->store('temp');
            // $file = public_path('attachments/'.$request->attach_doc);
        }
        // dd($data);
        $enrollment = Enrollment::create($data);
        $enrollment->update(['course_id' => $data['course_id']]);
        if ($enrollment) {
            if ($request->file('attach_doc')) {
                $mail = Mail::to(env('MAIL_FROM_ADDRESS'))->send((new SendMail($data))->attach(
                    $attach_doc->getRealPath(),
                    [
                        'as' => $attach_doc->getClientOriginalName(),
                        'mime' => $attach_doc->getClientMimeType(),
                    ]
                ));
                // $mail->attach(storage_path('app/' . $path), [
                //     'as' => $attach_doc->getClientOriginalName(),
                //     'mime' => $attach_doc->getClientMimeType(),
                // ]);
                // Delete the temporary file
                Storage::delete($path);
            } else {
                Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SendMail($data));
            }
        }
        // toastr()->success('Your enrollement has done successfully, we will contact you soon.');
        return view('enrollment');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contact_us_mail(ContactRequest $request)
    {
        if (!$request->validated()) {
            // return response()->json(['success' => $request->all()]);
            $errors = $request->errors();
            return response()->json(['errors' => $errors]);
        }

        $data = $request->all();
        $contact = Contact::create($data);
        if ($contact) {
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($data));
        }

        return redirect()->back()
            ->with(['success' => 'Thank you for contacting us. We will contact you shortly.']);
    }

    public function maintenance()
    {
        return view('maintenance');
    }

    public function contactUsEmail(MaintenanceRequest $request)
    {
        if (!$request->validated()) {
            // return response()->json(['success' => $request->all()]);
            $errors = $request->errors();
            return response()->json(['errors' => $errors]);
        }

        // Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($validated));
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($request->all()));
        return redirect()->back()->with('success', 'Thank you for contacting us. We will contact you shortly.');
    }
}
