@extends('include.master')
@section('title',$title)
@section('content')
    <div class="courses-area section-padding40 fix mt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Our featured courses!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <img src="{{asset('assets/img/gallery/featured1.png')}}" alt="">
                            </div>
                            <div class="properties__caption">
                                <p>Client based & hands-on</p>
                                <h3>Amazon FBA Wholesale</h3>
                                <p class="description max-3lines mb-0 line_clamp">A complete walkthrough of the Wholesale
                                    FBA
                                    model with the latest techniques.
                                    There will be two main methods ‘Direct’ & ‘Reverse’ in which leads generation,
                                    sourcing, account creation, contact
                                    distributors via email & call, Catalog Scanning,
                                    reseller permit, product hunting, tools analysis, shipment plan, 3PL, and Seller
                                    Central will be taught.
                                </p>
                                <a class="text-primary readmore">Read More</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <img src="{{asset('assets/img/gallery/featured2.png')}}" alt="">
                            </div>
                            <div class="properties__caption">
                                <p>Client based & hands-on</p>
                                <h3>Amazon FBA Private Label</h3>
                                <p class="description max-3lines mb-0 line_clamp">A complete walkthrough of the Private
                                    Label FBA
                                    model. There will be an immense list of instructions that will be
                                    taught to qualify the product for a bigger investment. The key terms will revolve
                                    around Product Research through different
                                    tools as well as Manual Hunting, Competitor Analysis,
                                    Sourcing from Alibaba, Product Inspection and Feasibility, Patent Check, Listing
                                    Optimization, and PPC campaigns.
                                </p>
                                <a class="text-primary readmore">Read More</a>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <img src="{{asset('assets/img/gallery/featured3.png')}}" alt="">
                            </div>
                            <div class="properties__caption">
                                <p>Client based & hands-on</p>
                                <h3>Amazon Online Arbitrage</h3>
                                <p class="description max-3lines mb-0 line_clamp">There will be a set of steps for the
                                    Online
                                    Arbitrage model with a set of predefined online Retail Stores. A complete
                                    walkthrough of sourcing, account creation, contact via email & call, Product
                                    Scanning, tools analysis, shipment plan, 3PL, and Seller Central will be taught.
                                </p>
                                <a id="btn-readmore3" class="text-primary readmore">Read More</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <img src="{{asset('assets/img/gallery/featured4.png')}}" alt="">
                            </div>
                            <div class="properties__caption">
                                <p>Client based & hands-on</p>
                                <h3>Digital Marketing</h3>
                                <p class="description max-3lines mb-0 line_clamp">Every business needs digital marketing so
                                    we
                                    have brought an exciting course outline for this skill.
                                    The main focus will be on increasing organic traffic and boosting sales.
                                    A graphics designing skill is necessary to ease the process of marketing so how to
                                    convince the
                                    client using infographics will mainly be taught in this additional skillset.
                                </p>
                                <a id="btn-readmore4" class="text-primary readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <img src="{{asset('assets/img/gallery/featured5.png')}}" alt="">
                            </div>
                            <div class="properties__caption">
                                <p>Client based & hands-on</p>
                                <h3>Freelancing (Upwork & Fiverr)</h3>
                                <p class="description max-3lines mb-0 line_clamp">
                                    Learning is not enough to make you able to earn. There should be a platform from
                                    where the students should be able to provide the services that they have learned so
                                    for this purpose this course is being introduced with a core knowledge of
                                    freelancing. The course outcomes will make you able to find clients, communicate and
                                    deliver the required results.
                                </p>
                                <a class="text-primary readmore">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses area End -->
    {{-- Pricing area start --}}
    <div class="topic-area section-padding40 pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Pricing</h2>
                        <p>Simple prices, flexible options, and nothing hidden. Start your career by choosing the
                            learning objectives</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="py-5 text-center mb-30 border price-div">
                        <div class="topic-img">

                            <div class="px-4 topic-content-box">
                                <div class="mb-5 topic-title">
                                    <h1 class="mb-0">Starter</h1>
                                    <i>Choose any 1 course.</i>
                                </div>
                                <div class="topic-content">
                                    <ul>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Amazon FBA Wholesale
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Amazon Private Label
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Amazon Online Arbitrage
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Digital Marketing
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Freelancing (Duration
                                            1.5 months)</li>
                                    </ul>
                                </div>
                                <div class="topic-price">
                                    <h2>PKR 25,000/-</h2>
                                </div>
                                <div class="topic-footer">
                                    <a href="{{ route('enrollment') }}" class="btn btn-buy">Enroll Now</a>
                                </div>
                                <a href="#" class="overseas_price text-primary">Price for Overseas/Pakistani</a>
                                <a href="#" class="local_price text-primary d-none">Price for Local/pakistani</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="py-5 text-center mb-30 border price-div">
                        <div class="topic-img">
                            {{-- <img src="assets/img/gallery/topic1.png')}}" alt=""> --}}
                            <div class="px-4 topic-content-box">
                                <div class="mb-5 topic-title">
                                    <h1 class="mb-0">Combination</h1>
                                    <i>Choose any 2 courses.</i>
                                </div>
                                <div class="topic-content">
                                    <ul>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Amazon FBA Wholesale
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Amazon Private Label
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Amazon Online Arbitrage
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Digital Marketing
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Freelancing (Duration
                                            1.5 months)</li>
                                    </ul>
                                </div>
                                <div class="topic-price">
                                    <h2>PKR 40,000/-</h2>
                                </div>
                                <div class="topic-footer">
                                    <a href="{{ route('enrollment') }}" class="btn btn-buy">Enroll Now</a>
                                </div>
                                <a href="#" class="overseas_price text-primary">Price for Overseas/Pakistani</a>
                                <a href="#" class="local_price text-primary d-none">Price for Local/pakistani</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="py-5 text-center mb-30 border price-div">
                        <div class="topic-img">
                            <div class="px-4 topic-content-box">
                                <div class="mb-5 topic-title">
                                    <h1 class="mb-0">Complete</h1>
                                    <i>All the courses will be included with 1-year support.</i>
                                </div>
                                <div class="topic-content">
                                    <ul>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Amazon FBA Wholesale
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Amazon Private Label
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Amazon Online Arbitrage
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Digital Marketing
                                            (Duration 1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>Freelancing (Duration
                                            1.5 months)</li>
                                        <li><i class="fa fa-check mr-3" aria-hidden="true"></i>One-to-one live support
                                        </li>
                                    </ul>
                                </div>
                                <div class="topic-price">
                                    <h2>PKR 80,000/- (<del>PKR 1,25,000/-</del>)</h2>
                                </div>
                                <div class="topic-footer">
                                    <a href="{{ route('enrollment') }}" class="btn btn-buy">Enroll Now</a>
                                </div>
                                <a href="#" class="overseas_price text-primary">Price for Overseas/Pakistani</a>
                                <a href="#" class="local_price text-primary d-none">Price for Local/pakistani</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <p class="text-purple mb-0"><strong>Note:</strong> EcomGladiators provide a certificate only after the
                        candidate passes the assessment</p>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.readmore').on('click', function(e) {
            e.preventDefault();
            var desc = $(this).text();
            if (desc == 'Hide') {
                $(this).text('Read More');
                var close_desc = $(this).closest('.properties__caption').find('.description').addClass(
                'line_clamp');
            } else {
                $(this).text('Hide');
                var close_desc = $(this).closest('.properties__caption').find('.description').removeClass(
                    'line_clamp');
            }
        });
        $('.overseas_price').on('click', function(e) {
            e.preventDefault();
            $(this).addClass('d-none');
            $(this).next('.local_price').removeClass('d-none');
            var topic_title = $(this).parent().find('.topic-title h1').html();
            if (topic_title == 'Starter') {
                $(this).parent().find('.topic-price h2').text('$150');
            } else if (topic_title == 'Combination') {
                $(this).parent().find('.topic-price h2').text('$250');
            } else {
                $(this).parent().find('.topic-price h2').html('$500 (<del>$750</del>)');
            }

        });
        $('.local_price').on('click', function(e) {
            e.preventDefault();
            $(this).addClass('d-none');
            $(this).prev('.overseas_price').removeClass('d-none');
            var topic_title = $(this).parent().find('.topic-title h1').html();
            if (topic_title == 'Starter') {
                $(this).parent().find('.topic-price h2').text('PKR 25,000/-');
            } else if (topic_title == 'Combination') {
                $(this).parent().find('.topic-price h2').text('PKR 40,000/-');
            } else {
                $(this).parent().find('.topic-price h2').html('PKR 80,000/- (<del>PKR 1,25,000/-</del>)');
            }

        });
    </script>
@endsection
