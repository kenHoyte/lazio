<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-lg-8">
                        <div class="short_contact_list">
                            <ul>
                                <li><a href="#"> <i class="fa fa-phone"></i> +1 (454) 556-5656</a></li>
                                <li><a href="#"> <i class="fa fa-envelope"></i>Yourmail@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-4">
                        <div class="social_media_links d-none d-lg-block">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="main-menu">
                            <nav>
                                <ul id="navigation">
                                    
                    

                                    <li>
                                        <a>@if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                            @auth
                                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                            @else
                                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                        
                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif</a>
                                </li>
                                    <li><a href="About.html">About</a></li>
                                    <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="single-blog.html">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="elements.html">elements</a></li>
                                            <li><a href="Cause.html">Cause</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a data-scroll-nav='1' href="#">Make a Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>