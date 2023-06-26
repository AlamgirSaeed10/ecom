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
        <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 border-white">
                            <thead class="table-dark text-uppercase bg-dark">
                                <tr class="agent-tbl">
                                    <th>Sr.</th>
                                    <th>Certificate ID</th>
                                    <th>Certificate No</th>
                                    <th>Student ID</th>
                                    <th>Starting Date</th>
                                    <th>Compilition Date</th>
                                    <th>Enrolled Course</th>
                                    <th>Certificate Image</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($view_certificate as $key => $values )

                                <tr class="agent-tbl-data">
                                    <td>{{++$key}}</td>
                                    <td>{{$values->CertificateID}}</td>
                                    <td>{{$values->CertificateNo}}</td>
                                    <td>{{$values->StudentID}}</td>
                                    <td>{{$values->StartingDate}}</td>
                                    <td>{{$values->CompilitionDate}}</td>
                                    <td>{{$values->EnrolledCourse}}</td>
                                    <td>{{$values->CertificateImage}}</td>
                                    <td>

                                        {{-- <button type="button" data-modalid="{{$values->CertificateNo}}" class="btn btn-primary waves-effect waves-light modalBtn" data-bs-toggle="modal"
                                        data-id="{{$values->CertificateNo}}" data-bs-target="#myModal">Standard modal</button> --}}

                                        <a data-modalid="{{$values->CertificateNo}}" class="waves-effect waves-light modalBtn btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                        data-id="{{$values->CertificateNo}}" data-bs-target="#myModal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-outline-warning btn-sm edit" href="#" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-danger btn-sm delete" href="#" title="delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>


                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-title="" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


{{-- show data in modal --}}
    <script>
        $(document).ready(function() {
  $(".modalBtn").click(function() {

    var modalId = $(this).data("modalid");
    var modal = $("#myModal");
    var modalBody = modal.find(".modal-body");
    $.ajax({
      url: "{{ url('admin/show-certificate') }}/" + modalId,
      type: "GET",
      dataType: "json",
      success: function(data) {
        var certificate = data[0];
        if (modal.length) {
            var modalBody = modal.find(".modal-body");
            var modalTitle = modal.find(".modal-title");

            console.log(certificate.CertificateImage);
            var html1 = "<p> " + certificate.StudentID + " - "+certificate.EnrolledCourse+" </p>";
            var html = "<p>Certificate ID: " + certificate.CertificateID + "</p>";
            html += "<p>Certificate No: " + certificate.CertificateNo + "</p>";
            html += "<p>Student ID: " + certificate.StudentID + "</p>";
            html += "<p>Starting Date: " + certificate.StartingDate + "</p>";
            html += "<p>Completion Date: " + certificate.CompilitionDate + "</p>";
            html += "<p>Enrolled Course: " + certificate.EnrolledCourse + "</p>";
            html += "<p>Certificate Image: <img src='admin/assets/uploads/" + certificate.CertificateImage + "'></p>";

            modalBody.html(html);
            modalTitle.html(html1);

        } else {
        console.log("Modal element not found!");
        }
      },
      error: function() {
        modal.find(".modal-body").html("Error retrieving data.");
      }
    });

  });
});
    </script>
@endsection
