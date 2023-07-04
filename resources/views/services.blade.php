@extends('include.master', ['activePage' => 'services'])
@section('title', $title)
@section('content')

	<head>
		<link rel="stylesheet" href="{{asset('assets/css/tm-swiper-bundle.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/tm-style.css')}}" />
		<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"  rel="stylesheet" />

<style>
    a,p,h1,h2,h3,h4,ul {
	margin: 0;
	padding: 0;
}

.section-services {
	padding-top: 20px;
	padding-bottom: 120px;
	color: #fff;
	margin-top:-100px;
}

.section-services .header-section {
	margin-bottom: 35px;
}

.section-services .header-section .title {
	position: relative;
	margin-bottom: 40px;
	padding-bottom: 25px;
	text-transform: uppercase;
	font-weight: 700;
}

.section-services .header-section .title:before {
	content: "";
	position: absolute;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	width: 140px;
	height: 1px;
	background-color: #722ae6;
}

.section-services .header-section .title:after {
	content: "";
	position: absolute;
	bottom: -1px;
	left: 50%;
	transform: translateX(-50%);
	width: 45px;
	height: 3px;
	background-color: #722ae6;
}

.section-services .header-section .description {
	color: #6f6f71;
}

.section-services .single-service {
	margin-top: 40px;
	background-color: #fff;
	box-shadow: 0 0 10px 0 rgba(0,0,0,.1);
}

.section-services .single-service .part-1 {
	padding: 40px 40px 25px;
	border-bottom: 2px solid #1d1e23;
	text-align:center;
}
.section-services .single-service .part-1 > i {
    /*background: green; */
    padding: 20px;
    border-radius: 50%;
    border: 5px solid;
    margin: 11px;
    height:100px;
    width:100px;
    text-align:center;
}

.section-services .single-service .part-1 i {
	margin-bottom: 25px;
	font-size: 50px;
	color: #722ae6;
}

.section-services .single-service .part-1 .title {
	font-size: 17px;
	font-weight: 700;
	letter-spacing: 0.02em;
	line-height: 1.8em;
}

.section-services .single-service .part-2 {
	padding: 30px 40px 40px;
}

.section-services .single-service .part-2 .description {
	margin-bottom: 22px;
	color: #6f6f71;
	font-size: 14px;
	line-height: 1.8em;
}

.section-services .single-service .part-2 a {
	color: #fff;
	font-size: 14px;
	text-decoration: none;
}

.section-services .single-service .part-2 a i {
	margin-right: 10px;
	color: #722ae6;
}
.right-img {
    position: relative;
}

.centered-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-weight:bolder;
    font-size:50px !important;
    color:white;
}
.custom-hover .hidden-descriptions {
    display: none;
}

.custom-hover:hover .hidden-descriptions {
    display: block;
}

p{
    font-size:14px !important;
}

/*
QUOTE BANNER CODE
*/

    .get-quote{
    padding:20px;
    background: #722ae6;
    text-align:justify;
}
.quote-icon{
    border-radius:10px;
    background:white;
    padding:20px;
    margin:20px;
    font-size:30px;
}
@media screen and (max-width: 785px) {
    
.quote-text{
    font-size:20px !important;
    color:#fff;
    padding:5px;
    font-weight:bold;
    text-align:justify;
}
}
.quote-text{
    margin-top:20px;
    font-size:20px !important;
    color:#fff;
    padding:5px;
    font-weight:bold;
    text-align:justify;
}
.quote-desc{
    font-size:15px !important;
    color:#fff;
    padding-left:5px;
    text-align:justify;

}
.custom-btn {
    text-transform: uppercase;
    padding: 10px!important;
    display: inline-block !important;
    font-weight: 600;
    border-radius: 5px;
    -moz-user-select: none;
    letter-spacing: 1px;
    margin: 30px;
    border: 2px solid #fff;
}
.custom-btn:hover{

    background: white;
    border: 2px solid #722ae6;
    color:#722ae6;

}
@media screen and (max-width: 785px) {
    .right-img {
        margin-top: 50px; /* Adjust the margin value as needed for mobile */
    }
    .centered-text {
        margin-top: 1%;
    font-size: 18px !important;
    text-align: center;
    line-height: 1;
    letter-spacing: 1px;
    width: 100%;
    font-weight: bold;
    text-transform: capitalize;
    }
}

@media screen and (max-width:785px){
    .quote-icon {
    border-radius: 10px;
    background: white;
    padding: 15px;
    margin: 10px;
    font-size: 15px;
}
.quote-text {
    font-size: 15px !important;
    color: #fff;
    padding: 5px;
    font-weight: bold;
    text-align: justify;
    line-height: 1.5;
}
.quote-desc {
    font-size: 12px !important;
    color: #fff;
    padding-left: 5px;
    text-align: justify;
    line-height: 1;
}
.custom-div{
    display:none;
}
}

</style>
	</head>

<section class="about-area2 fix pb-padding">
   <div class="right-img">
            <img src="{{asset('assets/img/bg-img/service-bg.png')}}" alt="" class="img-fluid">
           <p class="centered-text">We empower entrepreneurs</p>
        </div>
</section>
<section class="about-area2 fix pb-padding">
   <div class="container">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        </div>
</section>
<section class="section-services">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
	        <div class="single-service custom-hover">
	          <div class="part-1">
	            <i class="fas fa-box-open" style="padding-left: 15px;"></i>
	            <h3 class="title">Wholesale Business</h3>
	          </div>
	          <div class="part-2">
	            <div class="description">
	              <p>
	                <i class="far fa-gem"></i> Research Brands/Distributors <br>
	              </p>
	              <p>
	                <i class="far fa-gem"></i> Winning Product Selection <br>
	              </p>
	              <p>
	                <i class="far fa-gem"></i> Source and negotiate with suppliers <br>
	              </p>
	              <p>
	                <i class="far fa-gem"></i> Shipment and Restocking <br>
	              </p>
	              <p class="hidden-descriptions">
	              <i class="far fa-gem"></i> Sales and order management </p>
	            </div>
	            <a href="#" class="text-dark">
	              <i class="fas fa-arrow-circle-right"></i>Hover to Read More </a>
	          </div>
	        </div>
	      </div>
	      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
	        <div class="single-service custom-hover">
	          <div class="part-1">
	            <i class="fas fa-undo-alt"></i>
	            <h3 class="title">Amazon Account Reinstatement</h3>
	          </div>
	          <div class="part-2">
	            <div class="description">
	              <p><i class="far fa-gem"></i> Violation Analysis <br></p>
	              <p><i class="far fa-gem"></i> POA (Plan of Action) <br></p>
	              <p><i class="far fa-gem"></i> Inventory/Account Evaluation <br></p>
	              <p><i class="far fa-gem"></i> Suspension Appeal <br></p>
	              <p class="hidden-descriptions" ><i class="far fa-gem"></i> Prevent Future Violations</p>
	            </div>
	            <a href="#" class="text-dark">
	              <i class="fas fa-arrow-circle-right"></i>Hover to Read More </a>
	          </div>
	        </div>
	      </div>
	      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
	        <div class="single-service custom-hover">
	          <div class="part-1">
	            <i class="fas fa-tags"></i>
	            <h3 class="title">Private Label Business</h3>
	          </div>
	          <div class="part-2">
	            <div class="description">
	              <p>
	                <i class="far fa-gem"></i> Market Research <br>
	              </p>
	              <p>
	                <i class="far fa-gem"></i> Product Selection <br>
	              </p>
	              <p>
	                <i class="far fa-gem"></i> EBC (Enhanced Brand Content) <br>
	              </p>
	              <p>
	                <i class="far fa-gem"></i> Research and Source Supplier <br>
	              </p>
	              <p class="hidden-descriptions">
	                <i class="far fa-gem"></i> Fulfillment and Logistics <br>
	              </p>
	              <p class="hidden-descriptions">
	                <i class="far fa-gem"></i> PPC Campaign <br>
	              </p>
	              <p class="hidden-descriptions">
	                <i class="far fa-gem"></i> Launch and Monitor
	              </p>
	            </div>
	            <a href="#" class="text-dark">
	              <i class="fas fa-arrow-circle-right"></i>Hover to Read More </a>
	          </div>
	        </div>
	      </div>
	      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
	        <div class="single-service custom-hover">
	          <div class="part-1">
	            <i class="fas fa-building"></i>
	            <h3 class="title">LLC/LTD (Company) Registration</h3>
	          </div>
	          <div class="part-2">
	            <div class="description">
	              <p><i class="far fa-gem"></i> Unique Business Address <br></p>
	              <p><i class="far fa-gem"></i> LLC state filing <br></p>
	              <p><i class="far fa-gem"></i> EIN Registration <br></p>
	              <p><i class="far fa-gem"></i> Payoneer Account <br></p>
	              <p class="hidden-descriptions"><i class="far fa-gem"></i> Article of Organization/Certificate of Formation <br></p>
	              <p class="hidden-descriptions"><i class="far fa-gem"></i> Reseller Certificate <br></p>
	              <p class="hidden-descriptions"><i class="far fa-gem"></i> Validation Certificate <br></p>
	              <p class="hidden-descriptions"><i class="far fa-gem"></i> Cert. of Good Standing <br></p>
	              <p class="hidden-descriptions"><i class="far fa-gem"></i> US phone number <br></p>
	              <p class="hidden-descriptions"><i class="far fa-gem"></i> Amazon Account</p>
	            </div>
	            <a href="#" class="text-dark">
	              <i class="fas fa-arrow-circle-right"></i>Hover to Read More </a>
	          </div>
	        </div>
	      </div>
	      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
	        <div class="single-service custom-hover">
	          <div class="part-1">
	            <i class="fas fa-check-circle"></i>
	            <h3 class="title">Brand Approval & Winning Product</h3>
	          </div>
	          <div class="part-2">
	            <div class="description">
	              <p><i class="far fa-gem"></i> Communication and Documentation <br></p>
	              <p><i class="far fa-gem"></i> Domain-Specific Account Approval <br></p>
	              <p><i class="far fa-gem"></i> Product on suggested criteria <br></p>
	              <p><i class="far fa-gem"></i> Restocking and Labeling</p>
	            </div>
	            <a href="#" class="text-dark">
	              <i class="fas fa-arrow-circle-right"></i>Hover to Read More </a>
	          </div>
	        </div>
	      </div>
	      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
	        <div class="single-service custom-hover">
	          <div class="part-1">
	           <i class="fas fa-code" style="padding-left: 15px;"></i>
	            <h3 class="title">Ecommerce Website Development</h3>
	          </div>
	          <div class="part-2">
	            <div class="description">
	                <p><i class = "far fa-gem"></i> E-commerce Website Design<br></p>
                    <p><i class = "far fa-gem"></i> Custom E-commerce Development<br></p>
                    <p><i class = "far fa-gem"></i> E-commerce Platform Selection<br></p>
                    <p><i class = "far fa-gem"></i> E-commerce Website Migration<br></p>
                    <p class = "hidden-descriptions"><i class = "far fa-gem"></i> Payment Gateway Integration<br></p>
                    <p class = "hidden-descriptions"><i class = "far fa-gem"></i> E-commerce SEO<br></p>
                    <p class = "hidden-descriptions"><i class = "far fa-gem"></i> E-commerce Analytics and Reporting<br></p>
                    <p class = "hidden-descriptions"><i class = "far fa-gem"></i> Mobile App Development<br></p>
                    <p class = "hidden-descriptions"><i class = "far fa-gem"></i> Ongoing Support and Maintenance<br></p>
                    <p class = "hidden-descriptions"><i class = "far fa-gem"></i> E-commerce Consulting and Strategy<br></p>
	            </div>
	            <a href="#" class="text-dark">
	              <i class="fas fa-arrow-circle-right"></i>Hover to Read More </a>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
	
<section>
    
	<div class="courses-area fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Global E-commerce Business</h2>
                        </div>
                    </div>
                </div>
                <div class="justify-content">
                    
                    <p>Welcome to Ecomgladiators, your premier e-commerce service provider specializing in Amazon wholesale and
                    private label business services. With a focus on key marketplaces such as the USA, UK, Germany, Canada, 
                    UAE, Italy, and France, we offer tailored solutions to help businesses thrive in these lucrative regions. 
                    From product sourcing and brand development to optimized listing creation and inventory management, 
                    we handle every aspect of your e-commerce journey. With our comprehensive knowledge of international 
                    regulations and logistics, we ensure smooth operations, timely delivery, and customer satisfaction across borders. 
                    Trust Ecomgladiators to be your trusted partner in expanding your e-commerce presence globally, connecting you with 
                    millions of potential customers and driving your business toward unprecedented growth.</p>
                   
                </div>
            </div>
        </div>
	
	
	
</section>	
	
	
	
	
	
	
	
	
	
	
	
	<!--TESTIMONIAL SECTION-->
<!--<section class="container-tm">-->
<!--	<div class="testimonial mySwiper">-->
<!--		<div class="testi-content swiper-wrapper">-->
<!--			<div class="slide swiper-slide">-->
<!--				<img src="{{asset('assets/img/icon/user-icon.png')}}" alt="" class="image" />-->
<!--				<p>-->
<!--					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,-->
<!--					saepe provident dolorem a quaerat quo error facere nihil deleniti-->
<!--					eligendi ipsum adipisci, fugit, architecto amet asperiores-->
<!--					doloremque deserunt eum nemo.-->
<!--				</p>-->

<!--				<i class="bx bxs-quote-alt-left tm-quote-icon"></i>-->

<!--				<div class="details">-->
<!--					<span class="name">Marnie Lotter</span>-->
<!--					<span class="job">Web Developer</span>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="slide swiper-slide">-->
<!--				<img src="{{asset('assets/img/icon/user-icon.png')}}" alt="" class="image" />-->
<!--				<p>-->
<!--					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,-->
<!--					saepe provident dolorem a quaerat quo error facere nihil deleniti-->
<!--					eligendi ipsum adipisci, fugit, architecto amet asperiores-->
<!--					doloremque deserunt eum nemo.-->
<!--				</p>-->

<!--				<i class="bx bxs-quote-alt-left tm-quote-icon"></i>-->

<!--				<div class="details">-->
<!--					<span class="name">Marnie Lotter</span>-->
<!--					<span class="job">Web Developer</span>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="slide swiper-slide">-->
<!--				<img src="{{asset('assets/img/icon/user-icon.png')}}" alt="" class="image" />-->
<!--				<p>-->
<!--					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,-->
<!--					saepe provident dolorem a quaerat quo error facere nihil deleniti-->
<!--					eligendi ipsum adipisci, fugit, architecto amet asperiores-->
<!--					doloremque deserunt eum nemo.-->
<!--				</p>-->

<!--				<i class="bx bxs-quote-alt-left tm-quote-icon"></i>-->

<!--				<div class="details">-->
<!--					<span class="name">Marnie Lotter</span>-->
<!--					<span class="job">Web Developer</span>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
		<!--<div class="swiper-button-next nav-btn"></div>-->
		<!--<div class="swiper-button-prev nav-btn"></div>-->
<!--		<div class="swiper-pagination"></div>-->
<!--	</div>-->
<!--</section>-->










<section class="get-quote">
    <div class="row">
        <div class="col-sm-12 col-md-1 col-lg-1" data-toggle="modal" data-target="#get-quote-modal"> <i class="fas fa-phone-alt quote-icon"></i></div>
        <div class="col-sm-12 col-md-7 col-lg-7">
            <p class="quote-text">Do you have any question about our services?</p>
            <p class="quote-desc">We provide free consultation so lets talk with us.</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 custom-div">
    <a href="tel:+923190143276" class="custom-btn float-right">Call for free consultation</a>
</div>

    </div>
</section>


<!--<section class="get-quote d-flex align-items-center text-center">-->
<!--    <div class="container">-->
<!--        <div class="properties__footer d-flex justify-content-between align-items-center">-->
<!--                                        <div class="restaurant-name">-->
<!--                                            <div class="rating">-->
<!--                                                <i class="fas fa-phone-alt quote-icon" data-toggle="modal" data-target="#get-quote-modal"></i>-->
<!--                                            </div>-->
<!--                                        </div>-->
                        <!--                    <p><span>(4.5)</span> based on 120</p>-->
                        <!--                    <p>Do you have any questions about our services?</p>-->
                        <!--<p>We provide free consultation, so let's talk with us.</p>-->
<!--                                        <div class="price">-->
                                            <!--<span><a href="tel:+923190143276" class="custom-btn float-md-right">Call for free consultation</a></span>-->
<!--                                            <span><a href="tel:+923190143276" class="custom-btn float-md-right">Call Now</a></span>-->
<!--                                        </div>-->
<!--                                    </div>-->
        <!--<div class="media contact-info">-->
        <!--              <i class="fas fa-phone-alt quote-icon"></i>-->
        <!--                <div class="media-body">-->
        <!--                    <p class="quote-text text-white">Do you have any questions about our services?</p>-->
        <!--                <p class="quote-desc text-white">We provide free consultation, so let's talk with us.</p>-->
                        <!--<a href="tel:+923190143276" class="custom-btn float-md-right">Call for free consultation</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--<div class="media contact-info">-->
        <!--                <a href="tel:+923190143276" class="custom-btn float-md-right">Call for free consultation</a>-->
        <!--                </div>-->
<!--    </div>-->
<!--</section>-->


















<div class="modal fade" id="get-quote-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Get A Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-contact contact_form" id="enrollment_form" action="{{route('get-quote')}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="recipient-name">Name</label>
            <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter your fullname">

            <label for="recipient-Email">Email</label>
            <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Enter your email">

            <label for="recipient-name">Contact (Whatsapp/Telegram)</label>
            <input type="text" class="form-control" id="ccontact" name="ccontact" placeholder="Enter Contact (Whatsapp/Telegram)">

            <label for="recipient-name">Estimated Budget</label>
            <input type="number" class="form-control" id="cbudget" name="cbudget" placeholder="Enter your Estimated budget">

            <label for="recipient-name">Select Service</label>
            <select name='cselectservice' class='form-control'>
                <option selected>Please select the Service</option>
                <option value="Wholesale Business">Wholesale Business</option>
                <option value="Private Label Business">Private Label Business</option>
                <option value="Amazon Account Reinstatemen">Amazon Account Reinstatement</option>
                <option value="Brand Approval & Winning Product">Brand Approval & Winning Product</option>
                <option value="LLC/LTD (Company) Registration">LLC/LTD (Company) Registration</option>
                <option value="Ecommerce Website Development">Ecommerce Website Development</option>
            </select>

            <label for="recipient-name">Amazon Account </label>
            <select name="camazonaccount" class="form-control">
                <option selected>Please select Account Type</option>
                <option value="New" >New</option>
                <option value="Old" >Old</option>
                <option value="Need Account" >Need Account</option>

            </select>

            <label for="recipient-name">Service Required</label>
            <select name='crequired' class='form-control'>
                <option selected>Please select the Service Required</option>
                <option value="Semi Managed" >Semi Managed</option>
                <option value="Fully Managed" >Fully Managed</option>
            </select>
          </div>
			  <div class="modal-footer">
				  <button type="submit" class="btn btn-buy" id="enroll_now_btn" >Save changes</button>
			  </div>
		</form>
    </div>
  </div>
</div>
</div>


<script src="{{asset('assets/js/tm-swiper-bundle.min.js')}}"></script>
<script>
	var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    grabCursor: true,
    autoplay: {
        delay: 3000, // Autoplay delay in milliseconds
        disableOnInteraction: false // Enable/disable autoplay on user interaction
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


</script>
@endsection
