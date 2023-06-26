@extends('layouts.app')
@section('content')

  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif (session('error'))
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif
    <div class="card">
        <div class="card-header"><h2>Add Course</h2></div>
        <div class="card-body">

            <div class="row">
                <div class="col-sm-12 col-lg-8 col-md-8 col-xl-8">
                 <form action="{{route('admin.store-courses')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        @php
                             $serialNumber = 'EG-' . date('dmY') . strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1));
                             $existingSerial = DB::table('courses')->where('CourseCode', $serialNumber)->exists();
                            if ($existingSerial) {
                                $serialNumber = 'EG-' . date('dmY') . strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1));
                            }
                        @endphp

                        <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 mb-3">
                            <label for="example-text-input">Course Code</label>
                            <input type="text" name="CourseCode" class="form-control" value="{{$serialNumber}}" readonly>
                        </div>
                        <div class="mb-3 col-lg-6 col-sm-12 col-md-6 col-xl-6">
                            <label for="example-text-input">Course Name</label>
                            <input type="text" name="CourseName" class="form-control" placeholder="Enter Course Name">
                        </div>

                        <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                            <label for="example-text-input">Start Date</label>
                            <input type="date" name="CourseStartDate" class="form-control">
                        </div>
                        <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                            <label for="example-text-input">End Date</label>
                            <input type="date" name="CourseEndDate" class="form-control">
                        </div>
                        <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                            <label for="example-text-input">Course Image</label>
                            <input type="file" onchange="document.getElementById('CourseImage').src = window.URL.createObjectURL(this.files[0])" name="CourseImage" id="CourseImage" class="form-control" required>
                        </div>
                        <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                            <label for="example-text-input">Course Description</label>
                        <textarea name="CourseDescription" class="form-control" name="CourseDescription" id="CourseDescription" cols="30"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                        <label for="example-text-input"></label><br>
                        <button type="submit" class="btn btn-outline-success">Submit</button>
                    </div>
                </form>
                </div>

                <div class="col-sm-12 col-lg-4 col-md-4 col-xl-4 border-1">
                    <img id="CourseImage" alt="Image Preview" class="img-fluid">
                </div>
            </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
