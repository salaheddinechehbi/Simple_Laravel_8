@extends('front.layouts.app')

@section('front_content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/background/3.jpg')}})">
    	<div class="auto-container">
        	<h1>Shop Products</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Shop Products</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<!--Shop Single-->
                	<div class="shop-section">
                    	
                        <!--Sort By-->
                        <div class="items-sorting">
                        	<div class="row clearfix">
                                <div class="results-column col-md-6 col-sm-6 col-xs-12">
                                    <h4>Showing 1-9 of 12 results</h4>
                                </div>
                                <div class="select-column pull-right col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <select name="sort-by">
                                            <option>Default Sorting</option>
                                            <option>By Order</option>
                                            <option>By Price</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
					
                    	<div class="row clearfix">
                        	
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                    	<div class="image">
	                                        <img src="{{ asset('front/images/resource/products/5.jpg')}}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><a href="produit/1"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="produit/1">The Innovators</a></h3>
                                            <div class="price">$34.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                    	<div class="image">
	                                        <img src="{{ asset('front/images/resource/products/6.jpg')}}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><a href="produit/1"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="produit/1">Win Your Friends</a></h3>
                                            <div class="price">$29.00</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                    	<div class="image">
	                                        <img src="{{ asset('front/images/resource/products/7.jpg')}}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><a href="produit/1"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="produit/1">Business Adventures</a></h3>
                                            <div class="price">$24.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                    	<div class="image">
	                                        <img src="{{ asset('front/images/resource/products/8.jpg')}}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">Win Your Friends</a></h3>
                                            <div class="price">$29.00</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                    	<div class="image">
	                                        <img src="{{ asset('front/images/resource/products/9.jpg')}}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">Business Adventures</a></h3>
                                            <div class="price">$24.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                    	<div class="image">
	                                        <img src="{{ asset('front/images/resource/products/10.jpg')}}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">The Innovators</a></h3>
                                            <div class="price">$34.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                    	<div class="image">
	                                        <img src="{{ asset('front/images/resource/products/11.jpg')}}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">The Innovators</a></h3>
                                            <div class="price">$34.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                    	<div class="image">
	                                        <img src="{{ asset('front/images/resource/products/12.jpg')}}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><a href="produit/1"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">Win Your Friends</a></h3>
                                            <div class="price">$29.00</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                    	<div class="image">
	                                        <img src="{{ asset('front/images/resource/products/13.jpg')}}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">Business Adventures</a></h3>
                                            <div class="price">$24.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
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
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar with-border">
						
                        <!-- Search -->
                        <div class="sidebar-widget search-box style-two">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title style-two">
                                <h2>Categories</h2>
                            </div>
                            <ul class="blog-cat-three">
                                <li><a href="#">Financial Products </a></li>
                                <li><a href="#">Telecommunication </a></li>
                                <li><a href="#">Social & Public Sector </a></li>
                                <li><a href="#">Healthcare Company </a></li>
                            </ul>
                        </div>
                        
                        <!-- Price Filters -->
                        <div class="sidebar-widget price-filters rangeslider-widget">
                        	<div class="sidebar-title style-two">
                                <h2>Filter By Price</h2>
                            </div>
                            <div class="range-slider-one clearfix">
                                <div class="price-range-slider"></div>
                                <div class="clearfix">
                                	<div class="pull-left">
                                    	<a href="#" class="theme-btn btn-style-one">Filtter</a>
                                    </div>
                                    <div class="pull-right">
										<div class="title">Price:</div>
                                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
									</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Top Related Posts -->
                        <div class="sidebar-widget related-posts">
                            <div class="sidebar-title style-two">
                            	<h2>Popular Products</h2>
                            </div>
							<div class="post">
                            	<figure class="post-thumb"><a href="produit/1"><img src="{{ asset('front/images/resource/products/prod-thumb-1.jpg')}}" alt=""></a></figure>
                                <h4><a href="produit/1">The Innovators</a></h4>
                                <div class="price">$34.99</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-o light"></span></div>
                            </div>
                            <div class="post">
                            	<figure class="post-thumb"><a href="shop-single.html"><img src="{{ asset('front/images/resource/products/prod-thumb-2.jpg')}}" alt=""></a></figure>
                                <h4><a href="shop-single.html">Good to Great</a></h4>
                                <div class="price">$29.00</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                            <div class="post">
                            	<figure class="post-thumb"><a href="shop-single.html"><img src="{{ asset('front/images/resource/products/prod-thumb-3.jpg')}}" alt=""></a></figure>
                                <h4><a href="shop-single.html">Built to Last</a></h4>
                                <div class="price">$24.99</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o light"></span></div>
                            </div>
						</div>
                        
                        <!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags style-two">
                            <div class="sidebar-title style-two"><h2>Tag Cloud</h2></div>
                            <a href="#">Idea</a>
                            <a href="#">Finance</a>
                            <a href="#">Experts</a>
                            <a href="#">Marketing</a>
                            <a href="#">Services</a>
                            <a href="#">Tips</a>
                            <a href="#">Growth</a>
                            <a href="#">Wealth</a>
                        </div>
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>

@endsection