    <!-- main-header -->
    <header class="main-header">
        <div class="auto-container">
            <div class="header-upper clearfix">
                <div class="outer-box">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index-2.html"><img src="{{ asset('assets/images/LOGO 2_0.jpg')}}" width="55" style="margin-top:25px;padding-top:25px;"  alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{ route('index')}}">Home</a>

                                    </li>
                                    <li class="dropdown"><a href="{{ route('portfolio')}}">Services</a>
                                        <ul>
                                            <li><a href="service.html">Data Analytics</a></li>
                                            <li><a href="service-2.html">Propasal Writing</a></li>
                                            <li><a href="service-2.html">Impact Assessment</a></li>
                                            <li><a href="service-2.html">Survey Design</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{ route('resources')}}">Resources</a>
                                        <ul>
                                            <li><a href="projects.html">Pojects</a></li>
                                            <li><a href="partnerships.html">Partnerships</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{ route('blog')}}">Blog</a>
                                        <ul>
                                            <li><a href="about.html">News and Impact</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{ route('about')}}">About Us</a>
                                        <ul>
                                            <li><a href="#c-vision">Our Vision and Mission</a></li>
                                            <li><a href="#c-history">Our History</a></li>
                                            <li><a href="#c-pillars">Our Pillars</a></li>
                                            <li><a href="#c-team">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Careers</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index-2.html"><img src="{{ asset('assets/images/LOGO 2_0.jpg')}}" width="30" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
