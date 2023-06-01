@extends('include.master')
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
                <div class="row">
                    <div class="border col-lg-8 mx-auto pt-4 px-5 shadow">
                        <h2 class="contact-title text-center">Please fill the form for your desired course intake.</h2>
                        <form class="form-contact contact_form" id="enrollment_form" action="{{ route('post_enrollment') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            @php
                            $stuentID = 'STU-' . date('dY') . strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1));
                            $existingID = DB::table('enrollment')
                                ->where('StudentID', $stuentID)
                                ->exists();
                            if ($existingID) {
                                $stuentID = 'STU-' . date('dY') . strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1));
                            }
                        @endphp
                        <input type="hidden" readonly name="StudentID" class="form-control" required
                            value="{{ $stuentID }}">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <select name="PlanID" class="form-control" id="plan_id">
                                            <option value="" selected>Select Plan *</option>
                                            @php
                                                $course =DB::table('course_plan')->get();
                                            @endphp
                                            @foreach ($course as $value )
                                            <option value="{{$value->PlanID}}">{{$value->PlanTitle}}</option>
                                            @endforeach
                                        </select>
                                        @error('plan_id')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group course_id_div">

                                        <select name="CourseCode" class="form-control" id="course_id">
                                            <option value="" selected disabled>Choose Course *</option>
                                            @php
                                                $course =DB::table('courses_offered')->get();
                                            @endphp
                                            @foreach ($course as $value )
                                            <option value="{{$value->CourseCode}}">{{$value->CourseName}}</option>
                                            @endforeach

                                        </select>
                                        <div id="course_selected"></div>
                                        @error('course_selected')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="StudentName" type="text"
                                            placeholder="Enter your Name*" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="FatherName" id="father_name" type="text"
                                            placeholder="Enter your Father Name*" value="{{ old('father_name') }}">
                                        @error('father_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="StudentCNIC" id="cnic" type="text"
                                            placeholder="Enter your CNIC*" value="{{ old('cnic') }}">
                                        @error('cnic')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="StudentPhone" id="Phone_no" type="text"
                                            placeholder="Enter your Phone Number*" value="{{ old('Phone_no') }}">
                                        @error('Phone_no')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="StudentCity" id="city" type="text"
                                            placeholder="Enter your City*" value="{{ old('city') }}">
                                        @error('city')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="StudentEmail" id="email" type="email"
                                            placeholder="Enter your Email*" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="StudentGender" class="form-control" id="">
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
                                        <select name="TrainingMode" class="form-control" id="">
                                            <option value="" selected>Choose training mode *</option>
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
                                        <select name="PaymentOption" class="form-control" id="">
                                            <option value="" selected>Make Payment *</option>
                                            <option value="On-site">On-site</option>
                                            <option value="Online">Online</option>
                                        </select>
                                        @error('payment_option')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="KnowAboutUs" class="form-control" required>
                                            <option value="Referral">Referral</option>
                                            <option value="Social Media">Social Media</option>
                                            <option value="Another Website">Another Website</option>
                                            <option value="Ad">Ad</option>
                                            <option value="Search Engine">Search Engine</option>
                                            <option value="Other">Other</option>
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
                                            submitting the fee to <a href="#" class="text-danger acc_detail" data-toggle="modal" data-target="#accDetail">account
                                                details.</a></span>
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
                                        refund will not be accepted.</p>
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
            <h5 class="modal-title" id="accDetailLabel">Bank Account Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p><strong>Name of Bank:</strong> Allied Bank Limited</p>
            <p><strong>Title of Account:</strong> ECOMGLADIATORS (PRIVATE)</p>
            <p><strong>Account Number:</strong> 12450010099561950012</p>
            <p><strong>IBAN Number:</strong> PK44ABPA0010099561950012</p>
            <p><strong>SWIFT/BIC Code:</strong> ABPAPKKA</p>
            <strong>Note: Please contact us if you are unable to deposit the funds.</strong>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-buy" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
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
            } else {
                $('.attach_doc_div').addClass('d-none');
                $('#is_file_visible').val(false);
            }
            $('select[name=payment_option]').on('change', function() {
                var payment_option_check = $('select[name=payment_option] :selected').val();
                if (payment_option_check == 1) {
                    $('.attach_doc_div').removeClass('d-none');
                    $('#is_file_visible').val(true);
                } else {
                    $('.attach_doc_div').addClass('d-none');
                    $('#is_file_visible').val(false);
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
        });

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
            });
    </script>
@endsection
