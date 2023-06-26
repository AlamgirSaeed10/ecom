@extends('layouts.master', ['activePage' => 'courses'])
@section('title', 'Courses')
@section('content')
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
                            <div class="col-lg-4 p-0"><img src="{{ url('/public') }}/assets/img/gallery/featured1.png" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 properties__card">
                        <div class="row">
                            <div class="col-lg-4 p-0">
                                <img src="{{ url('/public') }}/assets/img/gallery/featured2.png" alt="" class="w-100">
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
                            <div class="col-lg-4 p-0"><img src="{{ url('/public') }}/assets/img/gallery/featured3.png" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 properties__card">
                        <div class="row">
                            <div class="col-lg-4 p-0">
                                <img src="{{ url('/public') }}/assets/img/gallery/featured4.png" alt="" class="w-100">
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
                            <div class="col-lg-4 p-0"><img src="{{ url('/public') }}/assets/img/gallery/featured5.png" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area End -->
    </main>
    @include('layouts.includes.footer')
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
