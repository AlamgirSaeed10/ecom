<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
class EnrollmentController extends Controller
{

    public function enrollment(){
        $title="Student Enrollment";
        return view('enrollment',compact('title'));
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


    $mail = new PHPMailer(true);
                  try {
                      $mail->SMTPDebug = 1; // Enable verbose debug output
                      $mail->isSMTP();
                      $mail->Host = 'smtp.gmail.com';
                      $mail->SMTPAuth = true;
                      $mail->Username = 'muhammadalamgir10@gmail.com';
                      $mail->Password = 'znensgwmxpgeflzi';
                      $mail->SMTPSecure = 'tls';
                      $mail->Port = 587;

                      $mail->setFrom('admission@ecomgladiators.com', 'Ecom Gladiators');

                         $mail->addAddress("muhammadalamgir10@gmail.com",$request->name);
                         $mail->Subject = 'Student Enrollment Form ' . $request->name;
                        $mail->Body .= "Plan ID: " . $en_data['PlanID'] . "<br>";
                        $mail->Body .= "Course Code: " . $en_data['CourseCode'] . "<br>";
                        $mail->Body .= "Student ID: " . $en_data['StudentID'] . "<br>";
                        $mail->Body .= "Student Name: " . $en_data['StudentName'] . "<br>";
                        $mail->Body .= "Father's Name: " . $en_data['FatherName'] . "<br>";
                        $mail->Body .= "Student CNIC: " . $en_data['StudentCNIC'] . "<br>";
                        $mail->Body .= "Student Phone: " . $en_data['StudentPhone'] . "<br>";
                        $mail->Body .= "Student City: " . $en_data['StudentCity'] . "<br>";
                        $mail->Body .= "Student Email: " . $en_data['StudentEmail'] . "<br>";
                        $mail->Body .= "Student Gender: " . $en_data['StudentGender'] . "<br>";
                        $mail->Body .= "Training Mode: " . $en_data['TrainingMode'] . "<br>";
                        $mail->Body .= "Payment Option: " . $en_data['PaymentOption'] . "<br>";
                        $mail->Body .= "How did you know about us? " . $en_data['KnowAboutUs'] . "<br>";


                          $mail->isHTML(true);
                          $mail->send();
                          $mail->ClearAddresses();

                    //   return redirect()->back()->with('success', 'Enrollment created successfully');
                       return view('index')->with('success','Your have Enrolled successfully. Out team will contact you shortly!  ');
                  } catch (Exception $e) {
                      return redirect()->back()->with('success','Email could not be sent. Error: ', $mail->ErrorInfo);
                  }
                  }
                  return redirect()->back()->with('success','Our team will contact you shortly... Please be patient.');

}

}
