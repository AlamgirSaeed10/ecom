@extends('layouts.app') @section('content') <div class="col-12">
  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>
  </div>
</div> @if (session('success')) <div class="alert alert-success">{{ session('success') }}</div> @elseif (session('error')) <div class="alert alert-error">{{ session('error') }}
</div> @endif <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-12 col-lg-8 col-md-8 col-xl-8">
            <form action="{{route('admin.enroll-student')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="row">
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">PlanID</label>
                      <input type="text" class="form-control" name="PlanID" placeholder="Enter PlanID">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Enrollment ID</label>
                      <input type="text" class="form-control" name="EnrollmentID" placeholder="Enter EnrollmentID">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Course ID</label>
                      <input type="text" class="form-control" name="CourseID" placeholder="Enter CourseID">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Student ID</label>
                      <input type="text" class="form-control" name="StudentID" placeholder="Enter StudentID">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Enrollment Code</label>
                      <input type="text" class="form-control" name="EnrollmentCode" placeholder="Enter EnrollmentCode">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Student Name</label>
                      <input type="text" class="form-control" name="StudentName" placeholder="Enter StudentName">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Father Name</label>
                      <input type="text" class="form-control" name="FatherName" placeholder="Enter FatherName">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Student CNIC</label>
                      <input type="text" class="form-control" name="StudentCNIC" placeholder="Enter StudentCNIC">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Student Phone</label>
                      <input type="text" class="form-control" name="StudentPhone" placeholder="Enter StudentPhone">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Student City</label>
                      <input type="text" class="form-control" name="StudentCity" placeholder="Enter StudentCity">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Student Email</label>
                      <input type="text" class="form-control" name="StudentEmail" placeholder="Enter StudentEmail">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Student Gender</label>
                      <input type="text" class="form-control" name="StudentGender" placeholder="Enter StudentGender">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Training Mode</label>
                      <input type="text" class="form-control" name="TrainingMode" placeholder="Enter TrainingMode">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Payment Option</label>
                      <input type="text" class="form-control" name="PaymentOption" placeholder="Enter PaymentOption">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-3 mb-3">
                      <label for="text-input">Know About Us</label>
                      <input type="text" class="form-control" name="KnowAboutUs" placeholder="Enter KnowAboutUs">
                    </div>
                    
                </div>
                <div class="mb-3 col-lg-4 col-sm-12 col-md-4 col-xl-4">
                    <label for="example-text-input"></label>
                    <button type="submit" class="btn btn-outline-success">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> @endsection