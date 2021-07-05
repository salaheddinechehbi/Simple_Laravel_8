@extends('front.layouts.app')

@section('front_content')
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/background/3.jpg')}})">
    	<div class="auto-container">
        	<h1>Blog Default</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Blog Default</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Blog Page Section-->
    <section class="blog-page-section">
    	<div class="auto-container">
        	
            <div class="row clearfix">
            	
                <!--News Block-->
                <div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog/1"><img src="{{ asset('front/images/resource/news-1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="category">Architecture</div>
                            <div class="lower-box">
                            	<div class="post-date">21 <br> Aug</div>
                                <h3><a href="blog/1">Stylish ways to display your tv</a></h3>
                                <div class="post-info"><span class="theme_color">By:</span> Steve Smith</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog/2"><img src="{{ asset('front/images/resource/news-2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="category">Modern Designs</div>
                            <div class="lower-box">
                            	<div class="post-date">14 <br> jun</div>
                                <h3><a href="blog/2">Get pleasant dining experience</a></h3>
                                <div class="post-info"><span class="theme_color">By:</span> James Davan</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog/3"><img src="{{ asset('front/images/resource/news-3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="category">Uncategorized</div>
                            <div class="lower-box">
                            	<div class="post-date">05 <br> May</div>
                                <h3><a href="blog/3">Smart ways to store appliances</a></h3>
                                <div class="post-info"><span class="theme_color">By:</span> Steve Smith</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog/1"><img src="{{ asset('front/images/resource/news-4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="category">Uncategorized</div>
                            <div class="lower-box">
                            	<div class="post-date">05 <br> May</div>
                                <h3><a href="blog/1">Smart ways to store appliances</a></h3>
                                <div class="post-info"><span class="theme_color">By:</span> Steve Smith</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="{{ asset('front/images/resource/news-5.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="category">Architecture</div>
                            <div class="lower-box">
                            	<div class="post-date">21 <br> Aug</div>
                                <h3><a href="blog-single.html">Stylish ways to display your tv</a></h3>
                                <div class="post-info"><span class="theme_color">By:</span> Steve Smith</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="{{ asset('front/images/resource/news-6.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="category">Modern Designs</div>
                            <div class="lower-box">
                            	<div class="post-date">14 <br> jun</div>
                                <h3><a href="blog-single.html">Get pleasant dining experience</a></h3>
                                <div class="post-info"><span class="theme_color">By:</span> James Davan</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="{{ asset('front/images/resource/news-7.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="category">Modern Designs</div>
                            <div class="lower-box">
                            	<div class="post-date">14 <br> jun</div>
                                <h3><a href="blog-single.html">Get pleasant dining experience</a></h3>
                                <div class="post-info"><span class="theme_color">By:</span> James Davan</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="{{ asset('front/images/resource/news-8.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="category">Uncategorized</div>
                            <div class="lower-box">
                            	<div class="post-date">05 <br> May</div>
                                <h3><a href="blog-single.html">Smart ways to store appliances</a></h3>
                                <div class="post-info"><span class="theme_color">By:</span> Steve Smith</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="{{ asset('front/images/resource/news-9.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="category">Architecture</div>
                            <div class="lower-box">
                            	<div class="post-date">21 <br> Aug</div>
                                <h3><a href="blog-single.html">Stylish ways to display your tv</a></h3>
                                <div class="post-info"><span class="theme_color">By:</span> Steve Smith</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!--Styled Pagination-->
            <ul class="styled-pagination text-center">
            	<li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
            </ul>                
            <!--End Styled Pagination-->            
            
        </div>
    </section>
    <!--End Blog Page Section-->

@endsection

