<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom  header-sticky sticky-bar">
                <div class="container-fluid">
                    <div class="row align-items-center pt-4">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logoMain">
                                <a href="{{ route('about.page') }}"><img class="logo-size" src="assets/img/logo/logo1.png"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block mr-0">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="{{ $activePage == 'home' ? 'active' : '' }}"><a class="a-color"
                                                    href="{{ route('about.page') }}">Home</a></li>
                                            <li class="{{ $activePage == 'courses' ? 'active' : '' }}"><a
                                                    class="a-color" href="{{ route('courses.page') }}">Courses</a></li>
                                            <li class="{{ $activePage == 'enrollment' ? 'active' : '' }}"><a
                                                    class="a-color" href="{{ route('enrollment.page') }}">Enrollment</a>
                                            </li>
                                            <li class="{{ $activePage == 'contact' ? 'active' : '' }}"><a
                                                    class="a-color" href="{{ route('contact.page') }}">Contact-Us</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('certificate') }}">Verify Certificate</a></li>
                                            <li class="d-lg-none d-block"><a href="mailto:info@ecomgladiators.com"><i
                                                        class="fa fa-envelope mr-2 a-color" aria-hidden="true"></i>
                                                    info@ecomgladiators.com</a></li>
                                            <li class="d-lg-none d-block"><a href="tel:+923190143276"><i
                                                        class="fa fa-phone mr-2 a-color" aria-hidden="true"
                                                        style="transform: rotate(90deg)"></i>
                                                    +92 319 0143276</a></li>
                                        </ul>
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
        </div>klklk;lkl
    </div>
    <!-- Header End -->
</header>
<header id="header_contactus" class="d-none d-lg-block">
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom main-header-bg header-sticky sticky-bar">
                <div class="container-fluid">
                    <div class="row py-1 align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="col-lg-4 row">
                        </div>
                        <div class="col-sm-12 col-lg-8 row">
                            <div class="col-12 text-md-left text-lg-right">
                                <div class="logo">
                                    <a class="a-color" href="mailto:info@ecomgladiators.com"><i
                                            class="fa fa-envelope mr-2" aria-hidden="true"></i>
                                        info@ecomgladiators.com</a>
                                    <a class="a-color" href="tel:+923190143276"><i class="fa fa-phone mr-2"
                                            aria-hidden="true" style="transform: rotate(90deg)"></i>
                                        +92 319 0143276</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
