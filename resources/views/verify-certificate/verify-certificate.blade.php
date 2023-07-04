@extends('include.master',['activePage' => 'certificate'])
@section('content')
<section class="py-5 mt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55 mt-50">
                            <h2>Have a happy Learning!</h2>
                        </div>
                    </div>
                </div>
  <div class="container text-center">
    <h1 class="display-4">Verification is Under Maintenance</h1>
    <p class="text-center">We apologize for the inconvenience, but we're performing some maintenance at the moment. Please check back soon!</p>
    <p class="text-center">for more info <a href="{{route('contact.page')}}" class="text-dark"><strong>Contact Us</strong></a></p>   
    
  </div>
  </section>

@endsection
