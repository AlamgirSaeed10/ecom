<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Mail\ContactUsMail;
use App\Mail\SendMail;
use App\Models\Contact;
use App\Models\Enrollment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Requests\EnrollmentRequest;
use App\Http\Requests\MaintenanceRequest;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
class HomeController extends Controller
{
    public function index()
    {
        $title ="We empower entrepreneurs"; 
        return view('index',compact('title'));
    }
    public function courses()
    {
        $title ="Courses"; 
        return view('courses',compact('title'));
    }
    public function services()
    {
        $title ="Services"; 
        return view('services',compact('title'));
    }
    public function about()
    {
        $title ="About Us"; 
        return view('about',compact('title'));
    }
    public function enrollment()
    {
        $title ="Enrollment"; 
        return view('enrollment',compact('title'));
    }
    public function sitemap()
    {
        $title ="Sitemap"; 
        return view('sitemap',compact('title'));
    }
    public function privacy_policy()
    {
        $title ="Privacy Policy"; 
        return view('privacy_policy',compact('title'));
    }
   
    public function get_quote(Request $request)
    {
        $data = array(
            'cname' => $request->cname,
            'cemail' => $request->cemail,
            'ccontact' => $request->ccontact,
            'cbudget' => $request->cbudget,
            'cselectservice' => $request->cselectservice,
            'camazonaccount' => $request->camazonaccount,
            'crequired' => $request->crequired
            );
            
             $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0; // Enable verbose debug output
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'muhammadalamgir10@gmail.com';
            $mail->Password = 'znensgwmxpgeflzi';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('admission@ecomgladiators.com', 'Ecom Gladiators');
            
                $mail->addAddress("muhammadalamgir10@gmail.com",$request->cname);
                $mail->Subject = 'Request for Quotetaion from ' . $request->cname;
              
                $mail->Body  = "Name: {$data['cname']}<br>";
                $mail->Body .= "Email: {$data['cemail']}<br>";
                $mail->Body .= "Contact: {$data['ccontact']}<br>";
                $mail->Body .= "Budget: {$data['cbudget']}<br>";
                $mail->Body .= "Service: {$data['cselectservice']}<br>";
                $mail->Body .= "Amazon Account: {$data['camazonaccount']}<br>";
                $mail->Body .= "Requirements: {$data['crequired']}<br>";
    
                $mail->isHTML(true);
                $mail->send();
                $mail->ClearAddresses();

            return redirect()->back()->with('success','Thank you for your submission. Our sales representative will contact you shortly');
        } catch (Exception $e) {
            return redirect()->back()->with('success','Email could not be sent. Error: ', $mail->ErrorInfo);
        }
        return redirect()->back()->with('success','Our team will contact you shortly... Please be patient.');
    }
    public function contact(){
        $title="Contact Us";
        return view('contact',compact('title'));
    }
    public function contact_us(Request $request){

    $name = $request->name;
    $email = $request->email;
    $subject = $request->subject;
    $phone = $request->phone;
    $message = $request->message;

       $mail = new PHPMailer(true);
              try {
                  $mail->SMTPDebug = 0; // Enable verbose debug output
                  $mail->isSMTP();
                  $mail->Host = 'smtp.gmail.com';
                  $mail->SMTPAuth = true;
                  $mail->Username = 'muhammadalamgir10@gmail.com';
                  $mail->Password = 'znensgwmxpgeflzi';
                  $mail->SMTPSecure = 'tls';
                  $mail->Port = 587;

                  $mail->setFrom('admission@ecomgladiators.com', 'Ecom Gladiators');

                     $mail->addAddress("muhammadalamgir10@gmail.com",$request->name);
                     $mail->Subject = 'Request for Quotation from ' . $request->name;
                     $mail->Body .= "name: {$request->name}<br>";
                     $mail->Body .= "email: {$request->email}<br>";
                     $mail->Body .= "subject: {$request->subject}<br>";
                     $mail->Body .= "phone: {$request->phone}<br>";
                     $mail->Body .= "message: {$request->message}<br>";

                      $mail->isHTML(true);
                      $mail->send();
                      $mail->ClearAddresses();

                  return redirect()->back()->with('success','Thank you for your submission. Our sales representative will contact you shortly');
              } catch (Exception $e) {
                  return redirect()->back()->with('success','Email could not be sent. Error: ', $mail->ErrorInfo);
              }
              return redirect()->back()->with('success','Our team will contact you shortly... Please be patient.');
    }
    public function maintenance(){
        $title = "Maintenance";
        return view('maintenance',compact('title'));
    }






}
