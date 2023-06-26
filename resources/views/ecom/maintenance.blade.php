@extends('layouts.other_master')
@section('other_content')
    <div class="background"></div>
    <div class="container">
        <div class="top">

        </div>
        {{-- <img class="com_logo" src="assets/img/logo/EcomGladiators-02.png" alt=""> --}}
        <h2 class="heading">We will be right back</h2>
        <p class="subtitle">We apologize for the inconvenience, but our website is currently undergoing maintenance. We're
            working hard to improve your experience and will be back online as soon as possible. If you need immediate
            assistance, please contact us at <a href="tel:+923190143276">0319 0143276</a> </p>
        {{-- <h3>PROGRESS</h3>
        <div class="progress-wrapper">
            <div class="progress"><span>0%</span></div>
        </div> --}}
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100086142884559&mibextid=ZbWKwL" target="_blank"><i
                    class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/ecomgladiators_/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="http://pinterest.com/ecomgladiators/" target="_blank"><i class="fab fa-pinterest"></i></a>
            <a href="https://twitter.com/EcomGladiators" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/ecom-gladiators" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://wa.link/ue2pfq" target="_blank"><i class="fab fa-whatsapp"></i></a>
            {{-- <a href="https://www.youtube.com/@ecomgladiators" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.tiktok.com/@ecomgladiators_" target="_blank"><i class="fab fa-tiktok"></i></a> --}}

        </div>
        <div>
            <form action="{{ route('contactUsEmail') }}" id="maintenance_form" method="POST">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
                @csrf
                <input type="text" placeholder="Name (required)" name="name" value="{{ old('name') }}">
                <input type="email" placeholder="Email (required)" name="email" value="{{ old('email') }}">
                <input type="text" placeholder="Contact No (optional)" name="phone" value="{{ old('phone') }}">
                <textarea placeholder="Message (required)" name="message">{{ old('message') }}</textarea>
                <input type="submit" id="maintenance_btn" value="Send">
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#maintenance_form').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var data = form.serialize();
            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                success: function(response) {
                    $('#maintenance_btn').prop('disabled', false);
                        // $('#preloader-active').delay(450).fadeOut('slow');
                        $(form)[0].reset();
                        toastr.success(
                            'Your Enrollment form has been submitted, we will contact you soon'
                        );
                },
                error: function(xhr, status, error) {
                    $('#maintenance_btn').prop('disabled', false);
                    // $('#preloader-active').delay(450).fadeOut('slow');
                    $('span').html('');
                    $.each(xhr.responseJSON.errors, function(field, errors) {
                        var input = form.find('[name=' + field + ']');
                        var container = input.closest('.form-group');
                        var errorElement = container.find('span');

                        input.addClass('is-invalid');
                        input.after("<span class='text-danger'>" + errors[
                            0] + "</span>");
                            input.addClass('has-error');
                    });
                }
            });
        })
    </script>
@endsection
