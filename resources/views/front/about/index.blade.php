@extends('front.layouts.app')

@section('front_content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/background/3.jpg')}})">
        <div class="auto-container">
            <h1>About Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Company Section-->
    <section class="company-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Company Overview</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-md-5 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Providing best <span>Interior & Architecture</span> <br> services since 1975.</h2>
                        <div class="text">
                            <p>Bruges brings 42 years of interior designs experience right to your home or office. Our
                                design professionals are equipped to help you determine the products and design that work
                                best for our customers within the colors and lighting of your surroundings more than your
                                expectation.</p>
                            <p>Experience right to your home or office. Our design professionals are equipped to help you
                                determine the products and work best for our customers.</p>
                        </div>
                        <div class="certificates clearfix">
                            <div class="image">
                                <img src="{{ asset('front/images/clients/certificate-4.png')}}" alt="" />
                            </div>
                            <div class="image">
                                <img src="{{ asset('front/images/clients/certificate-5.png')}}" alt="" />
                            </div>
                            <div class="image">
                                <img src="{{ asset('front/images/clients/certificate-6.png')}}" alt="" />
                            </div>
                        </div>
                        <div class="author">Velina Millan <span>/ G-Manager</span></div>
                    </div>
                </div>

                <!--Founder Column-->
                <div class="founder-column col-md-7 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-lg-7 col-md-6 col-sm-6 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/founder.jpg')}}" alt="" />
                                </div>
                                <div class="founder-text">Founded by John Meckey, he is US based interior designer.</div>
                            </div>
                            <!--Founder Content-->
                            <div class="founder-content-column col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <h3>Mission</h3>
                                    <div class="text">Denouncing pleasure and praising pain was born and we will give you a
                                        complete account of the system, and expound actual teachings the great explorer.
                                    </div>
                                    <h3>Vision</h3>
                                    <div class="text">Who loves or pursues or desires to obtain pain of itself, because it
                                        is pain, but because occasionally circumstances occur in some great pleasure.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Company Section-->

    <!--Video Section-->
    <section class="video-section" style="background-image:url({{ asset('front/images/background/4.jpg')}})">
        <div class="auto-container">
            <h2>Our concepts are <span class="theme_color">clear and beautiful</span>, Inspiring <br> features for your
                projects.</h2>
            <div class="text">Must explain to you how all this mistaken idea of denouncing pleasure and praising Design.
            </div>
            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-btn"><span
                    class="flaticon-play-button-5"></span></a>
            <div class="row clearfix">

                <!--Services Block-->
                <div class="services-block-five col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-people-1"></span>
                        </div>
                        <h3><a href="#">Creative Designers</a></h3>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-five col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-trophy-1"></span>
                        </div>
                        <h3><a href="#">Award Winners</a></h3>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-five col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-quality"></span>
                        </div>
                        <h3><a href="#">Quality Products</a></h3>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-five col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-support"></span>
                        </div>
                        <h3><a href="#">Customer Support</a></h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Video Section-->

    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Meet Our Team</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

                <!--Team Block-->
                <div class="team-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('front/images/resource/team-1.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                    <div class="name">Donald <br> T. Benjamin</div>
                                    <div class="designation">Vice President</div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Donald T.Benjamin pleasure and our praising pain was born and I will give
                                account of the system.</div>
                            <ul class="social-icon-four">
                                <li><a href="#"><span class="fa fa-facebook"></span></a><span class="name">facebook</span>
                                </li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a><span class="name">Twitter</span>
                                </li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a><span class="name">linkedin</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('front/images/resource/team-2.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                    <div class="name">Nichel <br> M. Petercomb</div>
                                    <div class="designation">HR Manager</div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Who loves or pursues or desires to obtain pain of itself, because it is pain,
                                but because occasionally.</div>
                            <ul class="social-icon-four">
                                <li><a href="#"><span class="fa fa-facebook"></span></a><span class="name">facebook</span>
                                </li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a><span class="name">Twitter</span>
                                </li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a><span class="name">linkedin</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('front/images/resource/team-3.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                    <div class="name">AK. <br>Van Nicholes</div>
                                    <div class="designation">Senior Builder</div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Take a trivial example, which of us ever undertakes laborious physical
                                exercise, obtain advantage.</div>
                            <ul class="social-icon-four">
                                <li><a href="#"><span class="fa fa-facebook"></span></a><span class="name">facebook</span>
                                </li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a><span class="name">Twitter</span>
                                </li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a><span class="name">linkedin</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Team Section-->

    <!--Counter Section-->
    <section class="counter-section">
        <div class="auto-container">

            <div class="sec-title">
                <h2>Our achivements</h2>
                <div class="separator"></div>
            </div>
            <div class="fact-counter style-two alternate">

                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <span class="icon-box">
                                <span class="icon flaticon-design"></span>
                            </span>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2500" data-stop="2.5">0</span>k
                            </div>
                            <h4 class="counter-title">Projects Worked</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <span class="icon-box">
                                <span class="icon flaticon-idea"></span>
                            </span>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2500" data-stop="376">0</span>
                            </div>
                            <h4 class="counter-title">Creative Concepts</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <span class="icon-box">
                                <span class="icon flaticon-medal"></span>
                            </span>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="23">0</span>
                            </div>
                            <h4 class="counter-title">Awards Holded</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <span class="icon-box">
                                <span class="icon flaticon-people-2"></span>
                            </span>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="825">0</span>
                            </div>
                            <h4 class="counter-title">Team Members</h4>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>
    <!--End Counter Section-->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/7.png')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/8.png')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/9.png')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/10.png')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/11.png')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/12.png')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/7.png')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/8.png')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/9.png')}}" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/images/clients/10.png')}}" alt=""></a></figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Clients Section-->

@endsection
