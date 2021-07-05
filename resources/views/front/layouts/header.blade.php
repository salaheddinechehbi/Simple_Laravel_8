<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-outer clearfix">

                <!--Top Left-->
                <div class="top-left">
                    <ul class="links clearfix">
                        <li><a href="#"><span class="icon flaticon-home-phone"></span> <strong>Make a call:</strong> +8
                                (321) 666-12-34</a></li>
                        <li><a href="#"><span class="icon flaticon-location"></span> <strong>Visit us on:</strong> 217
                                Royal Garden, NY</a></li>
                    </ul>
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <!--Top Right-->
                <div class="top-right clearfix">
                    <ul class="clearfix">
                        <li><a href="#">Cart: 0 item(s) - $0.00</a></li>
                    </ul>
                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                    class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value=""
                                                    placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span
                                                        class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Header Top End -->

    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <div class="border-box"></div>
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img src="{{ asset('front/images/logo.png')}}" alt=""></a></div>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">

                                <li class=""><a href="/">Home</a></li>

                                <li><a href="{{ route('service') }}">Services</a></li>

                                <li><a href="{{ route('about') }}">About Us</a></li>

                                <li><a href="{{ route('blog') }}">Blog</a></li>

                                <li><a href="{{ route('produit') }}">Shop</a></li>

                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!--Outer Box-->
                    <div class="outer-box">
                        <a href="catelogue.html" class="theme-btn catelogue-btn">Catelogue <span
                                class="icon"></span></a>
                    </div>

                </div>
                <!--Nav Outer End-->

            </div>
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">

            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box pull-left">
                    <div class="logo"><a href="index.html"><img src="{{ asset('front/images/logo-small.png')}}" alt=""></a></div>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">

                                <li class=""><a href="/">Home</a></li>

                                <li><a href="{{ route('service') }}">Services</a></li>

                                <li><a href="{{ route('about') }}">About Us</a></li>

                                <li><a href="{{ route('blog') }}">Blog</a></li>

                                <li><a href="{{ route('produit') }}">Shop</a></li>

                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                </div>
                <!--Nav Outer End-->

            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
