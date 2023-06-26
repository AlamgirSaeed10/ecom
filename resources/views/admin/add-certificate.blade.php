@extends('layouts.app')
@section('content')
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>
        </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif (session('error'))
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-12 col-lg-8 col-md-8 col-xl-8">
                        <form action="{{route('admin.store-certificate')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row">

                            @php
                                 $serialNumber = 'EG' . date('dmY') . strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1));
                                 $existingSerial = DB::table('certificates')->where('CertificateVerificationCode', $serialNumber)->exists();
                                if ($existingSerial) {
                                    $serialNumber = 'EG' . date('dmY') . strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1));
                                }
                            @endphp

                            <div class="mb-12 col-lg-12 col-sm-12 col-md-12 col-xl-12 mb-3">
                                <label for="example-text-input">Certificate Number</label>
                                <input type="text" name="CertificateNo" class="form-control" value="{{$serialNumber}}" readonly>
                            </div>

                            <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                                <label for="example-text-input">Select Student</label>
                                <select id="student-select" class="form-control select2" name="StudentID" required>
                                    <option selected>Please select Student </option>
                                    @php
                                        $StudentData = DB::Table('enrollments')->get();
                                    @endphp
                                    @foreach ($StudentData as $key => $value)
                                        <option value="{{ $value->StudentID }}">{{ $value->StudentName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                                <label for="example-text-input">Select Course</label>
                                <select id="courses" class="form-control select2" name="EnrolledCourse" required></select>
                            </div>
                            <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                                <label for="example-text-input">Certificate Number</label>
                                <input type="text" name="CertificateNo" class="form-control"
                                    placeholder="Enter Certificate Number">
                            </div>

                            <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                                <label for="example-text-input">Course Start Date</label>
                                <input type="date" name="StartingDate" class="form-control">
                            </div>
                            <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                                <label for="example-text-input">Course End Date</label>
                                <input type="date" name="CompilitionDate" class="form-control">
                            </div>
                            <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                                <label for="example-text-input">Certificate Image</label>
                                <input type="file" onchange="document.getElementById('CertificateImage').src = window.URL.createObjectURL(this.files[0])" name="CertificateImage" id="CertificateImage" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                            <label for="example-text-input"></label><br>
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </div>
                    </form>
                    </div>

                    <div class="col-sm-12 col-lg-4 col-md-4 col-xl-4">
                        <img id="CertificateImage" alt="Image Preview" class="img-fluid">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#student-select').change(function() {
                var studentID = $(this).val();
                if (studentID == "") {
                    $('#courses').hide();
                    return;
                }
                $.ajax({
                    url: "{{ url('admin/getStudentData') }}/" + studentID,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#courses').html('');
                        $('#courses').html(response);
                        $('#courses').show();
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        console.log('Error: ' + errorThrown);
                    }
                });

            });
        });

        CertificateImage.onchange = evt => {
  const [file] = CertificateImage.files
  if (file) {
    preview.src = URL.createObjectURL(file)
  }
}
    </script>
@endsection
