@extends('layouts.master', ['activePage' => 'contact'])
@section('title', 'Contact Us')
@section('content')
    <main>
        <!--? slider Area Start-->
        {{-- <section class="slider-area contact-hero">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 class="text-center" data-animation="bounceIn" data-delay="0.2s">Contact us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--?  Contact Area start  -->
        <section class="py-5 mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pb-5" style="height: 300px">
                        <div id="map"></div>
                    </div>
                </div>
                {{-- <div style="max-width:100%;overflow:hidden;color:red;width:600px;height:250px;">
                    <div id="display-google-map" class="col-sm-12"><iframe style="height:100%;width:100%;border:0;"
                            frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q=XMW7+356+Malik+Tower,+Basement,+Block+B+Citi+Housing,+Jhelum,+Punjab+49600&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div><a class="code-for-google-map" href="https://kbj9qpmy.com/bp" id="enable-map-data">Broadband
                        Providers</a>
                    <style>
                        #display-google-map img {
                            max-width: none !important;
                            background: none !important;
                            font-size: inherit;
                            font-weight: inherit;
                        }
                    </style>
                </div> --}}
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form class="form-contact contact_form" action="{{ route('contact.us.mail') }}" method="POST"
                            id="contact_us_form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"
                                            placeholder="Enter your name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="subject" id="subject" type="text"
                                            placeholder="Enter Subject">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="phone" type="text"
                                            placeholder="Enter Your Phone Number">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 mb-5">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                            placeholder=" Enter Message"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-buy" id="contact_us_btn">Send</button>
                                {{-- <button type="submit" class="button button-contactForm boxed-btn">Send</button> --}}
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Citi Housing, Jhelum</h3>
                                <p>Basement, Malik Tower, Block B Citi Housing Jhelum</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <a href="tel:+923190143276">
                                    <h3>+92 319 0143276</h3>
                                </a>
                                {{-- <p>Mon to Sat 9am to 5pm</p> --}}
                                <p>Mon to Sat<br>10:00AM - 5:00PM (Onsite)<br>09:00PM - 3:00AM (Online)</p>
                                {{-- <p>10:00AM - 5:00PM (Onsite)</p>
                                <p>09:00PM - 3:00AM (Online)</p> --}}
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <a href="mailto:info@ecomgladiators.com">
                                    <h3>info@ecomgladiators.com</h3>
                                </a>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
    @include('layouts.includes.footer')
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- JS here -->
@endsection
@section('script')
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdZ4ihlAqTpJhaHIYSssaPBazAjUCmnE8"></script> --}}
    <script>
        // For map
        function initMap() {
            // Location coordinates
            var location = {
                lat: 32.99518809324319,
                lng: 73.66293712208022
            };

            // Map options
            var mapOptions = {
                zoom: 16,
                center: location
            };

            // Create the map object
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            // Add a marker at the location
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }

        function loadScript() {
            var script = document.createElement('script');
            script.src =
                'https://maps.googleapis.com/maps/api/js?key=AIzaSyDMydriFouH9gTFRoMW-S4PATDuoriiM4g&callback=initMap';
            document.body.appendChild(script);
        }

        // Call the loadScript function
        loadScript();


        $('#contact_us_form').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var data = form.serialize();

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                success: function(response) {
                    $('#contact_us_btn').prop('disabled', false);
                    $('#preloader-active').delay(450).fadeOut('slow');
                    $(form)[0].reset();
                    toastr.success(
                        'Your form has been submitted, we will contact you soon'
                    );
                },
                error: function(xhr, status, error) {
                    $('#contact_us_btn').prop('disabled', false);
                    $('#preloader-active').delay(450).fadeOut('slow');
                    $('.form-group span').html('');
                    $.each(xhr.responseJSON.errors, function(field, errors) {
                        var input = form.find('[name=' + field + ']');
                        var container = input.closest('.form-group');
                        var errorElement = container.find('span');

                        input.addClass('is-invalid');
                        container.append("<span class='text-danger'>" + errors[
                            0] + "</span>");
                        container.addClass('has-error');
                    });
                }
            })
        })
    </script>
@endsection
