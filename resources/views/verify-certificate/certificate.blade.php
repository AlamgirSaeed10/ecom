@extends('include.master',['activePage' => 'certificate'])
@section('title',$title)
@section('content')




<section class="py-5 mt-100">
            <div class="container mt-70 mb-70">
                <div class="row">
                    <div class="border col-lg-8 mx-auto pt-4 px-5 shadow">
                        <h2 class="contact-title text-center">Enter Certificate Number to Verify Certificate</h2>
                        
                        <form class="form-contact contact_form" id="enrollment_form" action="{{route('verify-certificate')}}" method="post">
                                @csrf
                                <input class="form-control" name="CertificateNo" type="text" placeholder="Enter Certificate Number" required>
                                
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-buy" id="enroll_now_btn">Enroll Now</button>
                                </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>


       
@endsection
