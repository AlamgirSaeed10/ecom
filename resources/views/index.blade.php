@extends('include.master', ['activePage' => 'home'])
@section('title',$title)
@section('content')
    <head>
        <link rel="stylesheet" href="{{asset('assets/css/tm-swiper-bundle.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/tm-style.css')}}" />
        <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"  rel="stylesheet" />
    </head>
<section class="slider-area ">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInLeft" data-delay="0.2s">Global E-commerce Business</h1>
                            <p data-animation="fadeInLeft" data-delay="0.4s">Expand your e-commerce presence globally and drive your business toward unprecedented growth</p>
                                {{-- <button type="submit" class="button button-contactForm boxed-btn">Send</button> --}}
                                <a href="{{route('services.page')}}" class="btn hero-btn"
                                data-animation="fadeInLeft" data-delay="0.7s">Get a Quote!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="services-area">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services mb-30">
                    <div class="features-icon">
                        <img src="{{asset('assets/img/icon/icon1.svg')}}" alt="">
                    </div>
                    <div class="features-caption">
                        <h3>Learn & Earn</h3>
                        <p>We train people to become independent.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services mb-30">
                    <div class="features-icon">
                        <img src="{{asset('assets/img/icon/icon2.svg')}}" alt="">
                    </div>
                    <div class="features-caption">
                        <h3>Expert Instructors</h3>
                        <p>We provide hands-on and client-based training.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services mb-30">
                    <div class="features-icon">
                        <img src="{{asset('assets/img/icon/icon3.svg')}}" alt="">
                    </div>
                    <div class="features-caption">
                        <h3>Lifetime Access</h3>
                        <p>Lifetime Free Mentorship after the course completion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-area1 fix pt-10">
    <div class="support-wrapper align-items-center">
        <div class="left-content1">
            <div class="section-tittle section-tittle2 mb-55">
                <div class="front-text">
                    <h2 class="">Our Mission</h2>
                    <p class="pr-20">EcomGladiators empowers entrepreneurs, builds Amazon business to the next level, and drives
                        better sales also help clients
                        to navigate all challenges that USA and UK marketplaces throw at them. EcomGladiators is
                        serving the nation with professional
                        Amazon training through which people become independent to earn their livelihood. We deliver
                        client-based hands-on training
                        to our candidates so that they launch their startups in the world of eCommerce to become
                        successful entrepreneurs.</p>
                </div>
            </div>
        </div>
        <div class="right-content1">
            <div class="right-img">
                <img src="{{asset('assets/img/gallery/about2.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="team-area padding-bt-50 fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-tittle text-center mb-55">
                    <h2>Our Team Experts</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row mx-auto justify-content-center">
                <div class="col-lg-4">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{asset('assets/img/gallery/N_kazim.png')}}" alt="" class="w-100">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{asset('assets/img/gallery/N_usama.png')}}" alt="" class="w-100">
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mx-auto justify-content-center">
                <div class="col-lg-4">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{asset('assets/img/gallery/N_amarhd.png')}}" alt="" class="w-100">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{asset('assets/img/gallery/N_shumaila.png')}}" alt="" class="w-100">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{asset('assets/img/gallery/N_Humza.png')}}" alt="" class="w-100">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{asset('assets/img/gallery/N_ayesha.jpeg')}}" alt="" class="w-100">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="topic-area pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-tittle text-center mb-55">
                    <h2>Explore Top Subjects</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-topic text-center mb-30">
                    <div class="topic-img">
                        <img src="{{asset('assets/img/gallery/topic1.png')}}" alt="">
                        <div class="topic-content-box">
                            <div class="topic-content" data-toggle="modal" data-target="#exampleModalCenter">
                                <h3><a>Amazon Seller Central Management</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-topic text-center mb-30">
                    <div class="topic-img">
                        <img src="{{asset('assets/img/gallery/topic2.png')}}" alt="">
                        <div class="topic-content-box">
                            <div class="topic-content" data-toggle="modal" data-target="#PLProductResearch">
                                <h3><a>PL Product Research</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-topic text-center mb-30">
                    <div class="topic-img">
                        <img src="{{asset('assets/img/gallery/topic3.png')}}" alt="">
                        <div class="topic-content-box">
                            <div class="topic-content" data-toggle="modal"
                                data-target="#ExtensiveKeywordResearch">
                                <h3><a>Extensive Keyword Research</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-topic text-center mb-30">
                    <div class="topic-img">
                        <img src="{{asset('assets/img/gallery/topic4.png')}}" alt="">
                        <div class="topic-content-box">
                            <div class="topic-content" data-toggle="modal"
                                data-target="#ProductListingOptimization">
                                <h3><a>Product Listing Optimization</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-topic text-center mb-30">
                    <div class="topic-img">
                        <img src="{{asset('assets/img/gallery/topic5.png')}}" alt="">
                        <div class="topic-content-box">
                            <div class="topic-content" data-toggle="modal"
                                data-target="#OrderProcessingandTracking">
                                <h3><a>Order Processing and Tracking</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-topic text-center mb-30">
                    <div class="topic-img">
                        <img src="{{asset('assets/img/gallery/topic6.png')}}" alt="">
                        <div class="topic-content-box">
                            <div class="topic-content" data-toggle="modal"
                                data-target="#WholesaleAccountApproval">
                                <h3><a>Wholesale Account Approval</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-topic text-center mb-30">
                    <div class="topic-img">
                        <img src="{{asset('assets/img/gallery/topic7.png')}}" alt="">
                        <div class="topic-content-box">
                            <div class="topic-content" data-toggle="modal"
                                data-target="#WholesaleProductHunting">
                                <h3><a>Wholesale Product Hunting</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-topic text-center mb-30">
                    <div class="topic-img">
                        <img src="{{asset('assets/img/gallery/topic8.png')}}" alt="">
                        <div class="topic-content-box">
                            <div class="topic-content" data-toggle="modal" data-target="#InventoryManagement">
                                <h3><a>Inventory Management</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="section-tittle text-center mt-20">
                    <a href="{{asset('courses')}}" class="btn btn-buy">View Courses</a>

                </div>
            </div>
        </div>
    </div>
</div>





<!-- TESTIMONIAL SECTIOM-->
<!--<section class="container-tm mt-100">-->
<!--    <div class="testimonial mySwiper">-->
<!--        <div class="testi-content swiper-wrapper">-->
<!--            <div class="slide swiper-slide">-->
<!--                <img src="{{asset('assets/img/icon/user-icon.png')}}" alt="" class="image" />-->
<!--                <p>-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,-->
<!--                    saepe provident dolorem a quaerat quo error facere nihil deleniti-->
<!--                    eligendi ipsum adipisci, fugit, architecto amet asperiores-->
<!--                    doloremque deserunt eum nemo.-->
<!--                </p>-->

<!--                <i class="bx bxs-quote-alt-left tm-quote-icon"></i>-->

<!--                <div class="details">-->
<!--                    <span class="name">Marnie Lotter</span>-->
<!--                    <span class="job">Web Developer</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slide swiper-slide">-->
<!--                <img src="{{asset('assets/img/icon/user-icon.png')}}" alt="" class="image" />-->
<!--                <p>-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,-->
<!--                    saepe provident dolorem a quaerat quo error facere nihil deleniti-->
<!--                    eligendi ipsum adipisci, fugit, architecto amet asperiores-->
<!--                    doloremque deserunt eum nemo.-->
<!--                </p>-->

<!--                <i class="bx bxs-quote-alt-left tm-quote-icon"></i>-->

<!--                <div class="details">-->
<!--                    <span class="name">Marnie Lotter</span>-->
<!--                    <span class="job">Web Developer</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slide swiper-slide">-->
<!--                <img src="{{asset('assets/img/icon/user-icon.png')}}" alt="" class="image" />-->
<!--                <p>-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,-->
<!--                    saepe provident dolorem a quaerat quo error facere nihil deleniti-->
<!--                    eligendi ipsum adipisci, fugit, architecto amet asperiores-->
<!--                    doloremque deserunt eum nemo.-->
<!--                </p>-->

<!--                <i class="bx bxs-quote-alt-left tm-quote-icon"></i>-->

<!--                <div class="details">-->
<!--                    <span class="name">Marnie Lotter</span>-->
<!--                    <span class="job">Web Developer</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!--<div class="swiper-button-next nav-btn"></div>-->
        <!--<div class="swiper-button-prev nav-btn"></div>-->
<!--        <div class="swiper-pagination"></div>-->
<!--    </div>-->
<!--</section>-->









<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Amazon Seller Central Management</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We teach how satisfactorily and quickly answer customer queries and also handle activities like
                    return and refund management.
                    Also, help manage logistics and tracking to ensure customers are able to receive their products
                    within the designated delivery date.</p>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="PLProductResearch" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">PL Product Research</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We loop up the trendy as well as seasonal products and discuss all the statistics with graphs and
                    figures so that the buyer can take a good decision.</p>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="ExtensiveKeywordResearch" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Extensive Keyword Research</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We teach virtual assistant students to give services by focusing on identifying the most relevant
                    product-centric keywords that will drive more traffic to the selected product listing and result
                    in improved conversions.</p>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="ProductListingOptimization" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Product Listing Optimization</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We teach how to identify the keywords within the product listing to help your listing rank
                    organically on Amazon SERPs.</p>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="OrderProcessingandTracking" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Order Processing and Tracking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>A seller’s worst nightmare is forgetting to process an order and not tracking the order; we teach
                    our virtual
                    assistant students how to be organized on top of all the orders.</p>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="WholesaleAccountApproval" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Wholesale Account Approval</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>On the client's behalf, Our Virtual Assistant students are taught well that they contact
                    distributors,
                    and brands through email and call to get resale approval.</p>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="WholesaleProductHunting" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Wholesale Product Hunting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>The most important and time taking task is to find the best product that should comply the
                    predefined criteria, but not impossible. So, using a set of tools, tips, and tricks, our virtual
                    assistant students can list down a great number of products on criteria.</p>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="InventoryManagement" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Inventory Management</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Our managers and virtual assistant students work together to enable clients to optimally manage
                    their stock, keeping them
                    updated about purchased data, restocking, and much more. </p>
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
        delay: 3000, 
        disableOnInteraction: false 
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


</script>
@endsection
