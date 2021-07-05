@extends('front.layouts.app')

@section('front_content')
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/background/3.jpg')}})">
    	<div class="auto-container">
        	<h1>Services</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Services Page Section-->
    <section class="services-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="residential-design.html"><img src="{{ asset('front/images/resource/services-1.jpg')}}" alt="" /></a>
                            <div class="category">Residential Design</div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="text">Desires to obtain pain of itself, because it‘s but because occasionally.</div>
                            </div>
                            <div class="lower-box">
                            	<a href="residential-design.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="service/1"><img src="{{ asset('front/images/resource/services-2.jpg')}}" alt="" /></a>
                            <div class="category">Industrial Design</div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="text">Explain to you how this mistaken idea denouncing of pleasure.</div>
                            </div>
                            <div class="lower-box">
                            	<a href="service/1" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="service/1"><img src="{{ asset('front/images/resource/services-3.jpg')}}" alt="" /></a>
                            <div class="category">Restaurant Design</div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="text">It is a long established fact that reader will be distracted looking.</div>
                            </div>
                            <div class="lower-box">
                            	<a href="service/1" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="service/1"><img src="{{ asset('front/images/resource/services-4.jpg')}}" alt="" /></a>
                            <div class="category">Commercial Design</div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="text">Explain to you how this mistaken idea denouncing of pleasure.</div>
                            </div>
                            <div class="lower-box">
                            	<a href="service/1" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="corporate-design.html"><img src="{{ asset('front/images/resource/services-5.jpg')}}" alt="" /></a>
                            <div class="category">Corporate Design</div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="text">It is a long established fact that reader will be distracted looking.</div>
                            </div>
                            <div class="lower-box">
                            	<a href="corporate-design.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="hospitality-design.html"><img src="{{ asset('front/images/resource/services-6.jpg')}}" alt="" /></a>
                            <div class="category">Hospitality Design</div>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="text">Desires to obtain pain of itself, because it‘s but because occasionally.</div>
                            </div>
                            <div class="lower-box">
                            	<a href="hospitality-design.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Services Page Section-->
    
    <!--Call To Action-->
    <section class="call-to-action-section" style="background-image:url({{ asset('front/images/background/5.jpg')}})">
    	<div class="auto-container">
        	<h2>Are you looking for professional interior workers for <br> your commercial place? </h2>
            <div class="number">+8 (321) 666-12-34</div>
        </div>
    </section>
    <!--End Call To Action-->

@endsection