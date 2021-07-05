@extends("front.layouts.app")

@section('front_content')
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/background/3.jpg')}})">
    	<div class="auto-container">
        	<h1>Single Post</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Single Post</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                	<!--Our Classic-->
                	<div class="blog-single">
						<div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('front/images/resource/news-11.jpg')}}" alt="" />
                            </div>
                            <div class="lower-content">
                                <div class="category">Architecture</div>
                                    <div class="upper-box">
                                        <div class="post-date">21 <br> Aug</div>
                                        <h2>Top five stylish ways to display your tv</h2>
                                        <div class="post-info"><span class="theme_color">By:</span> Steve Smith <span class="theme_color">-</span>  <span class="theme_color">Comments:</span> 03</div>
                                    </div>
                                    <div class="text">
                                        <p>Rationally encounter consequences seds ut that are extremely painful  great explorer of the truth, the master-builder human happinessone rejects, dislikes, or avoids actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
                                        <p>Accept to obtain some advantage from it? But who has any right find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasurethere anyone loves or pursues.</p>
                                        <blockquote>
                                            <div class="quote-icon"><span class="icon flaticon-right-quotation-sign"></span></div>
                                            <div class="blockquote-text">  There anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which  can procure him some great pleasure. </div>
                                            <div class="quote-info">
                                                <h4>Richard Venanda</h4>
                                                <div class="quote-desination">CEO/Founder</div>
                                            </div>
                                        </blockquote>
                                        <div class="two-column clearfix">
                                            <div class="row clearfix">
                                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                                    <div class="image">
                                                        <img src="{{ asset('front/images/resource/news-14.jpg')}}" alt="" />
                                                    </div>
                                                </div>
                                                <div class="text-column col-md-6 col-sm-6 col-xs-12">
                                                    <p>Explain you how  mistaken idea denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the  of truth pain itself occur great.</p>
                                                    <p>The master-builder of human happiness which toil and pain can procure him some seds great pleasure take a of ever.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--post-share-options-->
                                    <div class="post-share-options">
                                        <div class="post-share-inner clearfix">
                                            <ul class="pull-left info-links clearfix">
                                                <li><a href="#"><span class="fa fa-heart"></span></a>18</li>
                                                <li><a href="#"><span class="fa fa-comments"></span></a>6</li>
                                            </ul>
                                            <div class="pull-right tags"><span>Tags: </span><a href="#">idea</a>, <a href="#">services</a>, <a href="#">Growth</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="group-title">
                        	<h2>About Author</h2>
                        </div>
                        
                        <!--Author Box-->
                        <div class="author-box">
                            <div class="author-comment">
                                <div class="inner">
                                    <div class="image"><img src="{{ asset('front/images/resource/author-4.jpg')}}" alt="" /></div>
                                    <h3>Lilly Anderson</h3>
                                    <div class="text">We will give you a complete account of the system, and expound actual teachings of explorer of the truth, the master-builder of human happiness.</div>
                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title">
                            	<h2>Read Comments</h2>
                                <div class="separator"></div>
                            </div>
                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="{{ asset('front/images/resource/author-5.jpg')}}" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">Steven Rich – Sep 17, 2016:</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star light"></span>
                                        </div>
                                        <div class="text">How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Comment Box-->
                            <div class="comment-box reply-comment">
                                <div class="comment">
                                    <div class="author-thumb"><img src="{{ asset('front/images/resource/author-6.jpg')}}" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">William Cobus – Aug 21, 2016:</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                        <div class="text">There anyone who loves or pursues or desires to obtain pain itself, because it is pain sed, because occasionally circumstances occur some great pleasure.</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- Comment Form -->
                        <div class="comment-form">	
                            <div class="group-title">
                            	<h2>Add Your Comments</h2>
                                <div class="separator"></div>
                            </div>
                            <div class="rating-box">
                                <div class="text"> Your Rating:</div>
                                <div class="rating">
                                    <a href="#"><span class="fa fa-star"></span></a>
                                </div>
                                <div class="rating">
                                    <a href="#">
                                    	<span class="fa fa-star"></span>
                                    	<span class="fa fa-star"></span>
                                    </a>
                                </div>
                                <div class="rating">
                                    <a href="#">
                                    	<span class="fa fa-star"></span>
                                    	<span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </a>
                                </div>
                                <div class="rating">
                                    <a href="#">
                                    	<span class="fa fa-star"></span>
                                    	<span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </a>
                                </div>
                                <div class="rating">
                                    <a href="#">
                                    	<span class="fa fa-star"></span>
                                    	<span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </a>
                                </div>
                            </div>
                            <form method="post" action="contact.html">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <label>First Name*</label>
                                        <input type="text" name="username" placeholder="" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <label>Last Name*</label>
                                        <input type="text" name="username" placeholder="" required>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <label>Email*</label>
                                        <input type="email" name="email" placeholder="" required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <label>Your Comments*</label>
                                        <textarea name="message" placeholder=""></textarea>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Now</button>
                                    </div>
                                    
                                </div>
                            </form>
                                
                        </div>
                        
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar with-border">
						
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Your Keyword..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
                        
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="blog-cat-two">
                                <li><a href="#">Modern Designs <span>(6)</span></a></li>
                                <li><a href="#">Architecture <span>(2)</span></a></li>
                                <li><a href="#">Interior & Exterior <span>(8)</span></a></li>
                                <li><a href="#">Commercial Works <span>(5)</span></a></li>
                                <li><a href="#">Uncategorized <span>(3)</span></a></li>
                            </ul>
                        </div>
                        
                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Most viewd</h2></div>
							
                            <div class="widget-content">
                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ asset('front/images/resource/post-thumb-1.jpg')}}" alt=""><a class="overlay" href="blog-single.html"></a></figure>
                                    <div class="post-info">March 31, 2018</div>
                                    <div class="text"><a href="blog-single.html">Special Message Regarding Mystery Shopper Programs.</a></div>
                                </article>
                                
                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ asset('front/images/resource/post-thumb-2.jpg')}}" alt=""><a class="overlay" href="blog-single.html"></a></figure>
                                    <div class="post-info">March 06, 2018</div>
                                    <div class="text"><a href="blog-single.html">More than 50 percent of the work we do today didnot exist.</a></div>
                                </article>
                                
                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ asset('front/images/resource/post-thumb-3.jpg')}}" alt=""><a class="overlay" href="blog-single.html"></a></figure>
                                    <div class="post-info">January 16, 2018</div>
                                    <div class="text"><a href="blog-single.html">The cost curve methodology was used in Germany.</a></div>
                                </article>
                                
                            </div>
                        	
                        </div>
                        
                        <!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>Tag Cloud</h2></div>
                            <a href="#">Idea</a>
                            <a href="#">Finance</a>
                            <a href="#">Experts</a>
                            <a href="#">Tips</a>
                            <a href="#">Marketing</a>
                            <a href="#">Services</a>
                            <a href="#">Growth</a>
                        </div>
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
    <!--End Sidebar Page Container-->

@endsection