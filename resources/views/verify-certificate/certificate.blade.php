@extends('include.master')
@section('content')
        <!--? slider Area Start-->
        <section class="slider-area slider-area2 about-page">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <form action="{{route('verify-certificate')}}" method="POST">
                                        @csrf
                                        <input type="text" name="CertificateNo" class="form-control">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
