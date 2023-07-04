<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom  header-sticky sticky-bar">
                <div class="container-fluid">
                    <div class="row py-1 align-items-center justify-content-between d-none d-sm-flex">
                        <div class="col-12 row">
                            <div class="col-12 text-right">
                                <div class="logo">
                                    <a class="a-color" href="mailto:info@ecomgladiators.com">
                                        <i class="fa fa-envelope mr-2 text-white" aria-hidden="true"></i>
                                        info@ecomgladiators.com
                                    </a>
                                    &nbsp;
                                    <a class="a-color" href="tel:+923190143276">
                                        <i class="fa fa-phone mr-2 text-white" aria-hidden="true"
                                            style="transform: rotate(90deg)"></i>
                                        +92 319 0143276
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center pt-4">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logoMain">
                                <a href="{{ url('/') }}">
                                    <img class="logo-size" src="{{ asset('assets/img/logo/logo1.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        
                                        
                                          <ul id="navigation">
                                            <li class="{{ $activePage == 'home' ? 'active' : '' }}">        <a class="" href="{{ route('about.page') }}">About Us</a></li>
                                            <li class="{{ $activePage == 'courses' ? 'active' : '' }}">     <a class="" href="{{ route('courses.page') }}">Courses</a></li>
                                            <li class="{{ $activePage == 'enrollment' ? 'active' : '' }}">  <a class="" href="{{ route('enrollment') }}">Enrollment</a></li>
                                            <li class="{{ $activePage == 'services' ? 'active' : '' }}">    <a class="" href="{{ route('services.page') }}">Services</a> </li>
                                            <li class="{{ $activePage == 'contact' ? 'active' : '' }}">     <a class="" href="{{ route('contact.page') }}">Contact-Us</a> </li>
                                            
                                            
                                            
                                            <li class="button-header margin-left "><a href="{{ url('certificate') }}" class="btn">Verify Certificate</a> </li>
                                        </ul>
                                        
                                        
                                        <!--<ul id="navigation">-->
                                        <!--    <li class="nav-itme"> <a class="nav-i {{ request()->routeIs('/') ? 'active':'' }}" href="{{ route('about.page') }}">About Us</a></li>-->
                                        <!--    <li class="nav-itme"> <a class="nav-i {{ request()->routeIs('courses.page') ? 'active':'' }}" href="{{ route('courses.page') }}">Courses </a></li>-->
                                        <!--    <li class="nav-itme"> <a class="nav-i {{ request()->routeIs('services.page') ? 'active':'' }}" href="{{ route('services.page') }}">Services </a></li>-->
                                        <!--    <li class="nav-itme"> <a class="nav-i {{ request()->routeIs('enrollment') ? 'active':'' }}" href="{{ route('enrollment') }}">Enrollment</a></li>-->
                                        <!--    <li class="nav-itme"> <a class="nav-i {{ request()->routeIs('contact.page') ? 'active':'' }}" href="{{ route('contact.page') }}">Contact Us</a></li>-->
                                            
                                        <!--    <li class="button-header margin-left ">-->
                                        <!--        <a href="{{ url('certificate') }}" class="btn">Verify Certificate</a>-->
                                        <!--        </li>-->
                                        <!--</ul>-->
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-sm-12 mobile_menu_div">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
