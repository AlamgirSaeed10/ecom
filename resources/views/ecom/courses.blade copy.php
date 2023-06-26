@extends('layouts.master', ['activePage' => 'courses'])
@section('title', 'Courses')
@section('content')
    <header>
        <!-- Header Start -->
        {{-- <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom main-header-bg header-sticky">
                    <div class="container-fluid">
                        <div class="row py-1 align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="col-4 row">
                                <div class="col-6">
                                    <div class="logo">
                                        <a href="" class="flex-center-start"><i class="fa fa-envelope mr-2 text-white" aria-hidden="true"></i>
                                            Info@courses.com</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="logo">
                                        <a href=""><i class="fa fa-phone mr-2 text-white" aria-hidden="true"
                                                style="transform: rotate(90deg)"></i>
                                            +3095700488</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 row">
                                <div class="col-12 text-right">
                                    <div class="logo">
                                        <a href=""><i class="fa-brands fa-facebook ml-auto mr-3 text-white"></i></a>
                                        <a href=""><i class="fa-brands fa-twitter mr-3 text-white"></i></a>
                                        <a href=""><i class="fa-brands fa-youtube mr-3 text-white"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram mr-3 text-white"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin mr-3 text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Header End -->
    </header>
    <!-- Header End -->
    <main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2 courses-hero">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Our courses</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('about.page') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('courses.page') }}">Courses</a>
                                            </li>
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our featured courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Client based & hands-on</p>
                                    <h3><a href="#">Amazon FBA Wholesale</a></h3>
                                    <p class="description1 max-3lines mb-0">A complete walkthrough of the Wholesale FBA
                                        model with the latest techniques.
                                        There will be two main methods ‘Direct’ & ‘Reverse’ in which leads generation,
                                        sourcing, account creation, contact
                                        distributors via email & call, Catalog Scanning,
                                        reseller permit, product hunting, tools analysis, shipment plan, 3PL, and Seller
                                        Central will be taught.
                                    </p>
                                    <a id="btn-readmore1" class="text-primary">Read More</a>
                                    {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                    {{--                                    <div class="restaurant-name"> --}}
                                    {{--                                        <div class="rating"> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star-half"></i> --}}
                                    {{--                                        </div> --}}
                                    {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                    {{--                                    </div> --}}
                                    {{--                                    <div class="price"> --}}
                                    {{--                                        <span>$135</span> --}}
                                    {{--                                    </div> --}}
                                    {{--                                </div> --}}
                                    <a href="{{ route('enrollment.page') }}" class="border-btn border-btn2 mt-3">Enroll
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Client based & hands-on</p>
                                    <h3><a href="#">Amazon FBA Private Label</a></h3>
                                    <p class="description2 max-3lines mb-0">A complete walkthrough of the Private Label FBA
                                        model. There will be an immense list of instructions that will be
                                        taught to qualify the product for a bigger investment. The key terms will revolve
                                        around Product Research through different
                                        tools as well as Manual Hunting, Competitor Analysis,
                                        Sourcing from Alibaba, Product Inspection and Feasibility, Patent Check, Listing
                                        Optimization, and PPC campaigns.
                                    </p>
                                    <a id="btn-readmore2" class="text-primary">Read More</a>
                                    {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                    {{--                                    <div class="restaurant-name"> --}}
                                    {{--                                        <div class="rating"> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star-half"></i> --}}
                                    {{--                                        </div> --}}
                                    {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                    {{--                                    </div> --}}
                                    {{--                                    <div class="price"> --}}
                                    {{--                                        <span>$135</span> --}}
                                    {{--                                    </div> --}}
                                    {{--                                </div> --}}
                                    <a href="{{ route('enrollment.page') }}" class="border-btn border-btn2 mt-3">Enroll
                                        Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/featured3.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Client based & hands-on</p>
                                    <h3><a href="#">Amazon Online Arbitrage</a></h3>
                                    <p class="description3 max-3lines mb-0">There will be a set of steps for the Online
                                        Arbitrage model with a set of predefined online Retail Stores. A complete
                                        walkthrough of sourcing, account creation, contact via email & call, Product
                                        Scanning, tools analysis, shipment plan, 3PL, and Seller Central will be taught.
                                    </p>
                                    <a id="btn-readmore3" class="text-primary">Read More</a>
                                    {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                    {{--                                    <div class="restaurant-name"> --}}
                                    {{--                                        <div class="rating"> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star-half"></i> --}}
                                    {{--                                        </div> --}}
                                    {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                    {{--                                    </div> --}}
                                    {{--                                    <div class="price"> --}}
                                    {{--                                        <span>$135</span> --}}
                                    {{--                                    </div> --}}
                                    {{--                                </div> --}}
                                    <a href="{{ route('enrollment.page') }}" class="border-btn border-btn2 mt-3">Enroll
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/featured4.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Client based & hands-on</p>
                                    <h3><a href="#">Digital Marketing</a></h3>
                                    <p class="description4 max-3lines mb-0">Every business needs digital marketing so we
                                        have brought an exciting course outline for this skill.
                                        The main focus will be on increasing organic traffic and boosting sales.
                                        A graphics designing skill is necessary to ease the process of marketing so how to
                                        convince the
                                        client using infographics will mainly be taught in this additional skillset.
                                    </p>
                                    <a id="btn-readmore4" class="text-primary">Read More</a>
                                    {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                    {{--                                    <div class="restaurant-name"> --}}
                                    {{--                                        <div class="rating"> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star-half"></i> --}}
                                    {{--                                        </div> --}}
                                    {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                    {{--                                    </div> --}}
                                    {{--                                    <div class="price"> --}}
                                    {{--                                        <span>$135</span> --}}
                                    {{--                                    </div> --}}
                                    {{--                                </div> --}}
                                    <a href="{{ route('enrollment.page') }}" class="border-btn border-btn2 mt-3">Enroll
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/featured5.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Client based & hands-on</p>
                                    <h3><a href="#">Freelancing (Upwork & Fiverr)</a></h3>
                                    <p class="description5 max-3lines mb-0">
                                        Learning is not enough to make you able to earn. There should be a platform from
                                        where the students should be able to provide the services that they have learned so
                                        for this purpose this course is being introduced with a core knowledge of
                                        freelancing. The course outcomes will make you able to find clients, communicate and
                                        deliver the required results.
                                    </p>
                                    <a id="btn-readmore5" class="text-primary">Read More</a>
                                    {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                    {{--                                    <div class="restaurant-name"> --}}
                                    {{--                                        <div class="rating"> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star"></i> --}}
                                    {{--                                            <i class="fas fa-star-half"></i> --}}
                                    {{--                                        </div> --}}
                                    {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                    {{--                                    </div> --}}
                                    {{--                                    <div class="price"> --}}
                                    {{--                                        <span>$135</span> --}}
                                    {{--                                    </div> --}}
                                    {{--                                </div> --}}
                                    <a href="{{ route('enrollment.page') }}" class="border-btn border-btn2 mt-3">Enroll
                                        Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 properties__card">
                        <div class="row">
                            <div class="col-lg-8 p-0">
                                <div class="properties properties2 mb-30">
                                    <div class="">
                                        {{-- <div class="properties__img overlay1">
                                            <a href="#"><img src="assets/img/gallery/featured1.png"
                                                    alt=""></a>
                                        </div> --}}
                                        <div class="properties__caption">
                                            <p>Client based & hands-on</p>
                                            <h3><a href="#">Amazon FBA Wholesale</a></h3>
                                            <p class="description1 max-3lines mb-0">A complete walkthrough of the Wholesale
                                                FBA
                                                model with the latest techniques.
                                                There will be two main methods ‘Direct’ & ‘Reverse’ in which leads
                                                generation,
                                                sourcing, account creation, contact
                                                distributors via email & call, Catalog Scanning,
                                                reseller permit, product hunting, tools analysis, shipment plan, 3PL, and
                                                Seller
                                                Central will be taught.
                                            </p>
                                            <a id="btn-readmore1" class="text-primary">Read More</a>
                                            {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                            {{--                                    <div class="restaurant-name"> --}}
                                            {{--                                        <div class="rating"> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star-half"></i> --}}
                                            {{--                                        </div> --}}
                                            {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                            {{--                                    </div> --}}
                                            {{--                                    <div class="price"> --}}
                                            {{--                                        <span>$135</span> --}}
                                            {{--                                    </div> --}}
                                            {{--                                </div> --}}
                                            <a href="{{ route('enrollment.page') }}"
                                                class="border-btn border-btn2 mt-3">Enroll
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 p-0"><img src="assets/img/gallery/featured1.png" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 properties__card">
                        <div class="row">
                            <div class="col-lg-4 p-0">
                                <img src="assets/img/gallery/featured2.png" alt="" class="w-100">
                            </div>
                            <div class="col-lg-8 p-0">
                                <div class="properties properties2 mb-30">
                                    <div class="">
                                        <div class="properties__caption">
                                            <p>Client based & hands-on</p>
                                            <h3><a href="#">Amazon FBA Private Label</a></h3>
                                            <p class="description2 max-3lines mb-0">A complete walkthrough of the Private
                                                Label FBA
                                                model. There will be an immense list of instructions that will be
                                                taught to qualify the product for a bigger investment. The key terms will
                                                revolve
                                                around Product Research through different
                                                tools as well as Manual Hunting, Competitor Analysis,
                                                Sourcing from Alibaba, Product Inspection and Feasibility, Patent Check,
                                                Listing
                                                Optimization, and PPC campaigns.
                                            </p>
                                            <a href="#" id="btn-readmore2" class="text-primary">Read More</a>
                                            {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                            {{--                                    <div class="restaurant-name"> --}}
                                            {{--                                        <div class="rating"> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star-half"></i> --}}
                                            {{--                                        </div> --}}
                                            {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                            {{--                                    </div> --}}
                                            {{--                                    <div class="price"> --}}
                                            {{--                                        <span>$135</span> --}}
                                            {{--                                    </div> --}}
                                            {{--                                </div> --}}
                                            <a href="{{ route('enrollment.page') }}"
                                                class="border-btn border-btn2 mt-3">Enroll
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 properties__card">
                        <div class="row">
                            <div class="col-lg-8 p-0">
                                <div class="properties properties2 mb-30">
                                    <div class="">
                                        <div class="properties__caption">
                                            <p>Client based & hands-on</p>
                                            <h3><a href="#">Amazon Online Arbitrage</a></h3>
                                            <p class="description3 max-3lines mb-0">There will be a set of steps for the
                                                Online
                                                Arbitrage model with a set of predefined online Retail Stores. A complete
                                                walkthrough of sourcing, account creation, contact via email & call, Product
                                                Scanning, tools analysis, shipment plan, 3PL, and Seller Central will be
                                                taught.
                                            </p>
                                            <a id="btn-readmore3" class="text-primary">Read More</a>
                                            {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                            {{--                                    <div class="restaurant-name"> --}}
                                            {{--                                        <div class="rating"> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star-half"></i> --}}
                                            {{--                                        </div> --}}
                                            {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                            {{--                                    </div> --}}
                                            {{--                                    <div class="price"> --}}
                                            {{--                                        <span>$135</span> --}}
                                            {{--                                    </div> --}}
                                            {{--                                </div> --}}
                                            <a href="{{ route('enrollment.page') }}"
                                                class="border-btn border-btn2 mt-3">Enroll
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 p-0"><img src="assets/img/gallery/featured3.png" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 properties__card">
                        <div class="row">
                            <div class="col-lg-4 p-0">
                                <img src="assets/img/gallery/featured4.png" alt="" class="w-100">
                            </div>
                            <div class="col-lg-8 p-0">
                                <div class="properties properties2 mb-30">
                                    <div class="">
                                        <div class="properties__caption">
                                            <p>Client based & hands-on</p>
                                            <h3><a href="#">Digital Marketing</a></h3>
                                            <p class="description4 max-3lines mb-0">Every business needs digital marketing
                                                so we
                                                have brought an exciting course outline for this skill.
                                                The main focus will be on increasing organic traffic and boosting sales.
                                                A graphics designing skill is necessary to ease the process of marketing so
                                                how to
                                                convince the
                                                client using infographics will mainly be taught in this additional skillset.
                                            </p>
                                            <a id="btn-readmore4" class="text-primary">Read More</a>
                                            {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                            {{--                                    <div class="restaurant-name"> --}}
                                            {{--                                        <div class="rating"> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star-half"></i> --}}
                                            {{--                                        </div> --}}
                                            {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                            {{--                                    </div> --}}
                                            {{--                                    <div class="price"> --}}
                                            {{--                                        <span>$135</span> --}}
                                            {{--                                    </div> --}}
                                            {{--                                </div> --}}
                                            <a href="{{ route('enrollment.page') }}"
                                                class="border-btn border-btn2 mt-3">Enroll
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 properties__card">
                        <div class="row">
                            <div class="col-lg-8 p-0">
                                <div class="properties properties2 mb-30">
                                    <div class="">
                                        <div class="properties__caption">
                                            <p>Client based & hands-on</p>
                                            <h3><a href="#">Freelancing (Upwork & Fiverr)</a></h3>
                                            <p class="description5 max-3lines mb-0">
                                                Learning is not enough to make you able to earn. There should be a platform
                                                from
                                                where the students should be able to provide the services that they have
                                                learned so
                                                for this purpose this course is being introduced with a core knowledge of
                                                freelancing. The course outcomes will make you able to find clients,
                                                communicate and
                                                deliver the required results.
                                            </p>
                                            <a id="btn-readmore5" class="text-primary">Read More</a>
                                            {{--                                <div class="properties__footer d-flex justify-content-between align-items-center"> --}}
                                            {{--                                    <div class="restaurant-name"> --}}
                                            {{--                                        <div class="rating"> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star"></i> --}}
                                            {{--                                            <i class="fas fa-star-half"></i> --}}
                                            {{--                                        </div> --}}
                                            {{--                                        <p><span>(4.5)</span> based on 120</p> --}}
                                            {{--                                    </div> --}}
                                            {{--                                    <div class="price"> --}}
                                            {{--                                        <span>$135</span> --}}
                                            {{--                                    </div> --}}
                                            {{--                                </div> --}}
                                            <a href="{{ route('enrollment.page') }}"
                                                class="border-btn border-btn2 mt-3">Enroll
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 p-0"><img src="assets/img/gallery/featured5.png" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!--? top subjects Area Start -->
        <div class="topic-area section-padding40 pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Explore top subjects</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/topic1.png" alt="">
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
                                <img src="assets/img/gallery/topic2.png" alt="">
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
                                <img src="assets/img/gallery/topic3.png" alt="">
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
                                <img src="assets/img/gallery/topic4.png" alt="">
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
                                <img src="assets/img/gallery/topic5.png" alt="">
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
                                <img src="assets/img/gallery/topic6.png" alt="">
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
                                <img src="assets/img/gallery/topic7.png" alt="">
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
                                <img src="assets/img/gallery/topic8.png" alt="">
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
                            <a href="{{ route('courses.page') }}" class="border-btn">View More Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-wrappper footer-bg">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png"
                                                alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Our solutions</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Company</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                            target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("#btn-readmore1").click(function() {
            $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
            $(".description1").toggleClass('max-3lines');
        });
        $("#btn-readmore2").click(function() {
            $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
            $(".description2").toggleClass('max-3lines');
        });
        $("#btn-readmore3").click(function() {
            $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
            $(".description3").toggleClass('max-3lines');
        });
        $("#btn-readmore4").click(function() {
            $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
            $(".description4").toggleClass('max-3lines');
        });
        $("#btn-readmore5").click(function() {
            $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
            $(".description5").toggleClass('max-3lines');
        });
    </script>
@endsection
