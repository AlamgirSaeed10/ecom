@extends('layouts.master', ['activePage' => 'enrollment'])
@section('title', 'Enrollment')
@section('content')
    <main>
        <!--? slider Area Start-->
        {{-- <section class="slider-area enroll-hero">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-11 col-md-12">
                                <div class="hero__caption text-center hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Have a happy Learning</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Courses area start -->
        <section class="py-5 mt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Have a happy Learning!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-12">
                        <h2 class="contact-title">Please Fill the form for your desired course intake</h2>
                    </div> --}}
                    <div class="border col-lg-8 mx-auto pt-4 px-5 shadow">
                        <h2 class="contact-title text-center">Please fill the form for your desired course intake</h2>
                        <form class="form-contact contact_form" id="enrollment_form" action="{{ route('post_enrollment') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        {{-- <input type="hidden" name="enrollment_code" value=""> --}}
                                        <select name="plan_id" class="form-control" id="plan_id">
                                            <option value="" selected>Select your Plan *</option>
                                            <option value="Starter" {{ old('plan_id') ? 'selected' : '' }}>Starter</option>
                                            <option value="Combination" {{ old('plan_id') ? 'selected' : '' }}>Combination
                                            </option>
                                            <option value="Complete" {{ old('plan_id') ? 'selected' : '' }}>Complete
                                            </option>
                                        </select>
                                        @error('plan_id')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group course_id_div">

                                        {{-- <input type="hidden" name="enrollment_code" value=""> --}}
                                        <select name="course_id" class="form-control" id="course_id">
                                            <option value="" selected disabled>Select your Course *</option>
                                            <option value="Amazon FBA Wholesale" {{ old('course_id') ? 'selected' : '' }}>
                                                Amazon FBA Wholesale</option>
                                            <option value="Amazon FBA Private Label"
                                                {{ old('course_id') ? 'selected' : '' }}>Amazon FBA Private Label</option>
                                            <option value="Amazon Online Arbitrage"
                                                {{ old('course_id') ? 'selected' : '' }}>Amazon Online Arbitrage</option>
                                            <option value="Digital Marketing" {{ old('course_id') ? 'selected' : '' }}>
                                                Digital Marketing</option>
                                            <option value="Freelancing (Upwork & Fiverr)"
                                                {{ old('course_id') ? 'selected' : '' }}>Freelancing (Upwork & Fiverr)
                                            </option>
                                        </select>
                                        <div id="course_selected"></div>
                                        @error('course_selected')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text"
                                            placeholder="Enter your Name*" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="father_name" id="father_name" type="text"
                                            placeholder="Enter your Father Name*" value="{{ old('father_name') }}">
                                        @error('father_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="cnic" id="cnic" type="text"
                                            placeholder="Enter your CNIC*" value="{{ old('cnic') }}">
                                        @error('cnic')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="Phone_no" id="Phone_no" type="text"
                                            placeholder="Enter your Phone Number*" value="{{ old('Phone_no') }}">
                                        @error('Phone_no')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="city" id="city" type="text"
                                            placeholder="Enter your City*" value="{{ old('city') }}">
                                        @error('city')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            placeholder="Enter your Email*" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="gender" class="form-control" id="">
                                            <option value="" selected>Select Gender *</option>
                                            <option value="male" {{ old('gender') ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ old('gender') ? 'selected' : '' }}>Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="training_mode" class="form-control" id="">
                                            <option value="" selected>Select your training mode *</option>
                                            <option value="0" {{ old('training_mode') ? 'selected' : '' }}>On-site
                                            </option>
                                            <option value="1" {{ old('training_mode') ? 'selected' : '' }}>Online
                                            </option>
                                        </select>
                                        @error('training_mode')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="payment_option" class="form-control" id="">
                                            <option value="" selected>Select your Payment *</option>
                                            <option class="payment_option_check" value="0"
                                                {{ old('payment_option') ? 'selected' : '' }}>On-site</option>
                                            <option class="payment_option_check" value="1"
                                                {{ old('payment_option') ? 'selected' : '' }}>Online</option>
                                        </select>
                                        @error('payment_option')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="heard_from" class="form-control" id="">
                                            <option value="" selected>How did you get to know about us? <span
                                                    class="text-danger">*</span></option>
                                            <option value="social_media" {{ old('heard_from') ? 'selected' : '' }}>Social
                                                Media</option>
                                            <option value="ads" {{ old('heard_from') ? 'selected' : '' }}>Ads</option>
                                            <option value="google" {{ old('heard_from') ? 'selected' : '' }}>Google
                                            </option>
                                            <option value="friend_family" {{ old('heard_from') ? 'selected' : '' }}>
                                                Friends/Family</option>
                                            <option value="offcie_employee" {{ old('heard_from') ? 'selected' : '' }}>
                                                Office employee</option>
                                            <option value="office_trainee" {{ old('heard_from') ? 'selected' : '' }}>
                                                Office Trainee</option>
                                            <option value="others" {{ old('heard_from') ? 'selected' : '' }}>Others
                                            </option>
                                        </select>
                                        @error('heard_from')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-none col-sm-6 attach_doc_div">
                                    <div class="form-group">
                                        <input type="hidden" name="is_file_visible" id="is_file_visible">
                                        <input type="file" name="attach_doc" class="form-control" id="attach_doc">
                                        <span class="text-info">Please attach the deposit slip or screenshot after
                                            submitting the fee to <a href="#" class="text-danger acc_detail"
                                                data-toggle="modal" data-target="#accDetail">account
                                                details</a></span>
                                        @error('attach_doc')
                                            <br><span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 bg-gray py-4">
                                    <h2 class="contact-title">Terms & Conditions</h2>
                                    <p class="text-black-50">After submitting the form the candidate will have 1 day to
                                        send
                                        the cancel request
                                        via email.
                                        The refund process will take maximum 5 business days.</p>
                                    <p class="text-black-50">After the confirmation email, the candidate will be enrolled
                                        so
                                        the request for
                                        refund will not be accepted</p>
                                    <p class="text-black-50">On course completion, the candidate will be given the
                                        certificate after the
                                        successful analysis test results.</p>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-buy" id="enroll_now_btn">Enroll Now</button>
                                    {{-- <button type="submit" class="button button-contactForm boxed-btn">Send</button> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bank detail Modal -->
        <div class="modal fade" id="accDetail" tabindex="-1" role="dialog" aria-labelledby="accDetailLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="accDetailLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Name of Bank:</strong> Allied Bank</p>
                        <p><strong>Title of Account:</strong> Ecom Gladiators</p>
                        <p><strong>Account Number:</strong> 1111111111</p>
                        <p><strong>IBAN Number:</strong> 1111111111111</p>
                        <strong>Note: Please contact us if you are unable to deposit the funds.</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-buy" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.includes.footer')
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#cnic').inputmask({
                'mask': '99999-9999999-9'
            });

            $('#city').on('keydown', function(e) {
                var charCode = (e.which) ? e.which : event.keyCode
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 37, 38, 39, 40]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: Ctrl+C
                    (e.keyCode == 67 && e.ctrlKey === true) ||
                    // Allow: Ctrl+X
                    (e.keyCode == 88 && e.ctrlKey === true)) {
                    // let it happen, don't do anything
                    return;
                }

                if ((String.fromCharCode(charCode).match(/[^A-Z a-z]/g)))
                    return false;
            });

            $('#Phone_no').on('keydown', function(e) {
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 37, 38, 39, 40]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: Ctrl+C
                    (e.keyCode == 67 && e.ctrlKey === true) ||
                    // Allow: Ctrl+X
                    (e.keyCode == 88 && e.ctrlKey === true)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if (e.shiftKey || (e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode >
                        105)) {
                    e.preventDefault();
                }
            });
            var payment_option_check = $('select[name=payment_option] :selected').val();
            if (payment_option_check == 1) {
                $('.attach_doc_div').removeClass('d-none');
                $('#is_file_visible').val(true);
                // $('#attach_doc').prop('required', true);
            } else {
                $('.attach_doc_div').addClass('d-none');
                $('#is_file_visible').val(false);
                // $('#attach_doc').prop('required', false);
            }
            $('select[name=payment_option]').on('change', function() {
                var payment_option_check = $('select[name=payment_option] :selected').val();
                if (payment_option_check == 1) {
                    $('.attach_doc_div').removeClass('d-none');
                    $('#is_file_visible').val(true);
                    // $('#attach_doc').prop('required', true);
                } else {
                    $('.attach_doc_div').addClass('d-none');
                    $('#is_file_visible').val(false);
                    // $('#attach_doc').prop('required', false);
                }
            });

            $('select[name=plan_id]').on('change', function() {
                var plan_id = $('select[name=plan_id] :selected').val();
                $('#course_selected').html('');
                $('select[id=course_id] option').prop('disabled', false);
                if (plan_id == 'Complete') {
                    $('select[id=course_id] option:not(:first)').each(function(index) {
                        $('#course_selected').append('<span><input type="hidden" value="' + $(this)
                            .val() +
                            '" name="course_selected[]">' + $(this).val() +
                            '</span>');
                        $('select[id=course_id] option').prop('disabled', true);
                    });
                }
            });

            $('select[id=course_id]').on('change', function() {
                var course_id = $('select[id=course_id] :selected').val();
                var plan_id = $('select[name=plan_id] :selected').val();
                var course_selected = $('#course_selected').html();
                if (plan_id == 'Starter') {
                    $('#course_selected').html('<span><input type="hidden" value="' + $(this).val() +
                        '" name="course_selected[]">' + course_id +
                        '<a href="#" class="course_select_cancel_btn">&times</a></span>');
                } else if (plan_id == 'Combination' && !($('span:contains("' + course_id + '")').length)) {
                    $('#course_selected').append('<span><input type="hidden" value="' + $(this).val() +
                        '" name="course_selected[]">' + course_id +
                        '<a href="#" class="course_select_cancel_btn">&times</a></span>');
                    var length = $('#course_selected').children().length;
                    if (length >= 2) {
                        $('select[id=course_id] option').prop('disabled', true);
                        // $('select[id=course_id] option[value="Amazon FBA Wholesale"]').prop('disabled', true);
                    } else {
                        $('select[id=course_id] option').prop('disabled', false)
                    }
                }

            });

            $('#course_selected').on('click', '.course_select_cancel_btn', function(e) {
                e.preventDefault();
                $(this).closest('span').remove();
                var length = $('#course_selected').children().length;
                if (length >= 2) {
                    $('select[id=course_id] option').prop('disabled', true);
                } else {
                    $('select[id=course_id] option').prop('disabled', false)
                }
            });

            // $('#enroll_now_btn').on('click', function(e) {
            //     e.preventDefault();
            //     var plan_id = $('#plan_id').val();
            //     var course_selected = $('#course_selected').children().length;
            //     if (plan_id == 'Combination' && course_selected < 2) {
            //         $('.course_id_div').append(
            //             "<span class='text-danger'>Please select one more Course</span>");
            //     } else {
            //         toastr.info('Are you the 6 fingered man?')
            //         // $('.contact_form').submit();
            //     }
            // })

            $('#enrollment_form').on('submit', function(e) {
                $('#enroll_now_btn').prop('disabled', true);
                $('#preloader-active');
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                var data = form.serialize();

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function(response) {
                        $('#enroll_now_btn').prop('disabled', false);
                        $('#preloader-active').delay(450).fadeOut('slow');
                        $(form)[0].reset();
                        $('#course_selected').html('');
                        toastr.success(
                            'Your Enrollment form has been submitted, we will contact you soon'
                        );
                    },
                    error: function(xhr, status, error) {
                        $('#enroll_now_btn').prop('disabled', false);
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

                });
            })
        });
    </script>
@endsection
