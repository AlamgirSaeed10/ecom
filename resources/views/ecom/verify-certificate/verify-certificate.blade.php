@extends('layouts.master', ['activePage' => 'certificate'])
@section('title','Certificate')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
        margin-top: 7%;
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 70vw;
      height: 80vh;
      margin: 0 auto;
      padding: 30px;
      border: 2px solid #555;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-image: url('images/bg1.png');
      background-size: cover;
      background-position: center;
    }
    .header {
      text-align: center;
      margin-bottom: 40px;
    }
    h1 {
      margin: 0;
      font-size: 32px;
      color: #000;
      font-weight: bold;
      text-transform: uppercase;

    }
    p {
      margin: 0;
      font-size: 18px;
    }
    .content {
      margin-bottom: 40px;
    }
    h2 {
      margin: 0;
      font-size: 28px;
      color: #fff;
      text-align: center;
      margin-bottom: 20px;
      text-transform: uppercase;
    }
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .signature {
      display: flex;
      align-items: center;
    }
    .signature img {
      width: 100px;
      height: auto;
      margin-right: 10px;
    }
    .signature p {
      margin: 0;
      font-size: 20px;
      color: #fff;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    #cert-title{
        font-size: 80px;
        color: purple;
        font-weight: bold;
        text-transform: uppercase;
    }
    #cert-desc{
        font-size: 40px;
        color: orange;
        font-weight: bold;
        text-transform: uppercase;
    }
     #cert-name{
        margin-top: 5%;
        font-size: 50px;
        color: purple;
        font-weight: bold;
        text-transform: uppercase;
        text-decoration: underline;
        text-decoration-style: solid;

    }
    #course-desc{
      font-size: 25px;
      max-width: 100vw;
      font-family: 'Time new Roman';
    }
  </style>
</head>
<body>
  <div class="container" class="img-fluid">
    <div class="header">
        <div class="col-lg-12">
            <span id="cert-title">Certificate</span><br>
            <span id="cert-desc">of Appreciation</span>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">This certificate is proudly awarded to</h1>
        </div>

    </div>
    <div class="content">

      @php
      $std_name = DB::table('enrollments')->where('StudentID',$verify[0]->StudentID)->get();
      @endphp
      <h2 id="cert-name" class="text-dark"><strong>{{$std_name[0]->StudentName}}</strong> <small>S/o</small><strong> {{$std_name[0]->FatherName}}</strong></h2>
      <p id="course-desc" class="text-center">for completing the course {{$verify[0]->CourseName}} successfully on {{$verify[0]->CompilitionDate}}</p>
    </div>
    <div class="footer">
      <div class="signature">
        <img src="signature.png" alt="Signature">
        <div>
          <p>John Doe</p>
          <p>Organizer</p>
        </div>
      </div>
      <p>Date</p>
    </div>
  </div>
</body>
</html>

@endsection
