@extends('include.master')
@section('title', $title)
@section('content')
<style>
    .single-course {
    padding: 12px;
    background: #fff;
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    margin-top: 30px;
}
.courses .course-head {
    position: relative;
    overflow: hidden;
}

.overlay {
    position: relative;
}
.course-head a {
    position: absolute;
    top: 50%;
    margin: -25px 0 0 -25px;
    z-index: 10;
    border-radius: 0px;
    left: 50%;
    font-weight: 500;
    text-transform: capitalize;
    margin-left: -58px;
    padding: 12px 22px;
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    transform: scale(0);
    border-radius: 50px;
}
</style>

<section class="py-5 mt-100">
    <div class="container">
        <div class="row">
           <div class="col-lg-4 col-md-6 col-12">
  <!-- Single Course -->
  <div class="card">
    <!-- Course Head -->
    <div class="card-header">
      <img src="" alt="#" class="card-img-top">
    </div>
    <!-- Course Body -->
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="teacher-info">
          <img src="images/author1.jpg" alt="#" class="rounded-circle" style="width: 40px; height: 40px;">
          <h4 class="card-title">Jewel Mathies</h4>
        </div>
        <span class="price">$550</span>
      </div>
      <h4 class="card-title"><a href="course-single.html">Learn Software Engineering Course</a></h4>
      <p class="card-text">Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the shore of this uncharted Gilligan</p>
    </div>
    <!-- Course Meta -->
    <div class="card-footer">
      <!-- Rattings -->
      <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
        <li class="list-inline-item point"><span>4.9</span></li>
      </ul>
      <!-- Course Info -->
      <div class="course-info">
        <span><i class="fa fa-users"></i>5.5k Enrolled</span>
        <span><i class="fa fa-calendar-o"></i>6 Months</span>
        <span><i class="fa fa-clock-o"></i>12:30 - 14:30</span>
      </div>
    </div>
    <!--/ End Course Meta -->
  </div>
  <!--/ End Single Course -->
</div>

        </div>
    </div>
</section>

@endsection
