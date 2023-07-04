@extends('include.master', ['activePage' => '404-page'])
@section('title',$title)
@section('content')
<style>
/*======================
    404 page
=======================*/

.page_404 {
  margin: 100px;
  padding: 40px 0;
  background: #fff;
  font-family: 'Arvo', serif;
}

.page_404 img {
  width: 100%;
  height:100%;
  margin-left:20px;
  margin-right:20px;
}

.four_zero_four_bg1 {
  /*background-image: url(https://miro.medium.com/v2/resize:fit:1400/1*zE2qnVTJehut7B8P2aMn3A.gif);*/
  height: 350px;
  background-position: center;
}

.four_zero_four_bg h1 {
  font-size: 80px;
}

.four_zero_four_bg h3 {
  font-size: 80px;
}

.link_404 {
  color: #fff!important;
  padding: 10px 20px;
  background: #39ac31;
  margin: 20px 0;
  display: inline-block;
}

.contant_box_404 {
  margin-top: -50px;
}

/* Media Queries */

@media (max-width: 768px) {
  .page_404 {
    margin: 50px;
  }
  
  .four_zero_four_bg {
    height: 450px;
  }
  
  .four_zero_four_bg h1,
  .four_zero_four_bg h3 {
    font-size: 60px;
  }
  
  .contant_box_404 {
    margin-top: -30px;
  }
}

@media (max-width: 480px) {
  .page_404 {
    margin: 30px;
  }
  
  .four_zero_four_bg {
    height: 350px;
  }
  
  .four_zero_four_bg h1,
  .four_zero_four_bg h3 {
    font-size: 40px;
  }
  
  .contant_box_404 {
    margin-top: -20px;
  }
}

</style>

 <section class="page_404">
	<div class="container">
		<div class="row">	
		<div class="col-sm-12 ">
		<div class="col-sm-10 col-sm-offset-1  text-center">
		<div class="four_zero_four_bg">
		    <img class="four_zero_four_bg1" src="https://cdn.dribbble.com/users/644529/screenshots/2662296/404.gif"/>
		</div>
		<div class="contant_box_404">
		<h3 class="h2 text-center">Look like you're lost</h3>
		<p class="text-center">the page you are looking for not avaible!</p>
	</div>
		</div>
		</div>
		</div>
	</div>
</section>
   
@endsection
