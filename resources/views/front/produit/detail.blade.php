@extends('front.layouts.app')

@section('front_content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/background/3.jpg')}})">
        <div class="auto-container">
            <h1>Product Single</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Product Single</li>
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
                    <div class="shop-single">
                        <div class="product-details">

                            <!--Basic Details-->
                            <div class="basic-details">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image-box"><a href="{{ asset('front/images/resource/products/14.jpg')}}"
                                                class="lightbox-image" title="Image Caption Here"><img
                                                    src="{{ asset('front/images/resource/products/14.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="details-header">
                                            <h4>Description</h4>
                                            <div class="item-price">$29.00</div>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-half-empty"></span>
                                            </div>
                                        </div>

                                        <div class="text">
                                            <p>Working from home meant we couldsnack and coffee our breaks change our desks
                                                or view, good, drink on the job, even spend the weather started getting
                                                roughday in pajamas consequences.</p>
                                        </div>
                                        <div class="location">Check Delivery Option at Your Location:</div>
                                        <!-- Pincode Form -->
                                        <div class="pincode-form">
                                            <form method="post" action="contact.html">
                                                <div class="form-group">
                                                    <input type="text" name="text" value="" placeholder="Pincode" required>
                                                    <button type="submit">Check</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="expired">Expected Delivery in 4-10 Days</div>
                                        <div class="other-options clearfix">
                                            <div class="item-quantity"><input class="quantity-spinner" type="text" value="2"
                                                    name="quantity"></div>
                                            <button type="button" class="theme-btn btn-style-one add-to-cart">Add To
                                                Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Basic Details-->

                            <!--Product Info Tabs-->
                            <div class="product-info-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">

                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-details" class="tab-btn active-btn">Description</li>
                                        <li data-tab="#prod-reviews" class="tab-btn">Reviews (2)</li>
                                    </ul>

                                    <!--Tabs Container-->
                                    <div class="tabs-content">

                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="prod-details">
                                            <div class="content">
                                                <p>Leverage agile frameworks to provide a robust synopsis for high level
                                                    overviews. Iterative approaches to corporate strategy foster
                                                    collaborative thinking to further the overall value proposition.
                                                    Organically grow the holistic world view of disruptive innovation via
                                                    workplace diversity and empowerment.Bring to the table win-win survival
                                                    strategies to ensure proactive domination. runway heading towards a
                                                    streamlined cloud solution.</p>
                                                <p>Collaboratively administrate empowered markets via plug-and-play
                                                    networks. Dynamically procrastinate B2C users after installed base
                                                    benefits. Dramatically visualize customer directed convergence. </p>
                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="prod-reviews">
                                            <h2 class="title">2 Reviews For win Your Friends</h2>
                                            <!--Reviews Container-->
                                            <div class="comments-area">
                                                <!--Comment Box-->
                                                <div class="comment-box">
                                                    <div class="comment">
                                                        <div class="author-thumb"><img src="{{ asset('front/images/resource/author-7.jpg')}}"
                                                                alt=""></div>
                                                        <div class="comment-inner">
                                                            <div class="comment-info clearfix">Steven Rich – Sep 17, 2016:
                                                            </div>
                                                            <div class="rating">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star light"></span>
                                                            </div>
                                                            <div class="text">How all this mistaken idea of denouncing
                                                                pleasure and praising pain was born and I will give you a
                                                                complete account of the system, and expound the actual
                                                                teachings.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Comment Box-->
                                                <div class="comment-box reply-comment">
                                                    <div class="comment">
                                                        <div class="author-thumb"><img src="{{ asset('front/images/resource/author-8.jpg')}}"
                                                                alt=""></div>
                                                        <div class="comment-inner">
                                                            <div class="comment-info clearfix">William Cobus – Aug 21, 2016:
                                                            </div>
                                                            <div class="rating">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star-half-empty"></span>
                                                            </div>
                                                            <div class="text">Working from home meant we couldsnack & coffee
                                                                breaks change our desks or view good, drink on the job even
                                                                spend getting roughday in pajamas consequences.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Comment Form -->
                                            <div class="shop-comment-form">
                                                <h2>Add Your Comments</h2>
                                                <div class="rating-box">
                                                    <div class="text"> Your Rating:</div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                        </a>
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
                                                            <label>First Name *</label>
                                                            <input type="text" name="username" placeholder="" required>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                            <label>Last Name*</label>
                                                            <input type="email" name="email" placeholder="" required>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                                            <label>Email*</label>
                                                            <input type="text" name="number" placeholder="" required>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                            <label>Your Comments*</label>
                                                            <textarea name="message" placeholder=""></textarea>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                            <button class="theme-btn btn-style-one" type="submit"
                                                                name="submit-form">Submit now</button>
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--End Product Info Tabs-->

                        </div>
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
                                        <div class="input"><input type="text" class="property-amount" name="field-name"
                                                readonly></div>
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
                                <figure class="post-thumb"><a href="shop-single.html"><img
                                            src="{{ asset('front/images/resource/products/prod-thumb-1.jpg')}}" alt=""></a></figure>
                                <h4><a href="shop-single.html">The Innovators</a></h4>
                                <div class="price">$34.99</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star-half-o light"></span></div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-single.html"><img
                                            src="{{ asset('front/images/resource/products/prod-thumb-2.jpg')}}" alt=""></a></figure>
                                <h4><a href="shop-single.html">Good to Great</a></h4>
                                <div class="price">$29.00</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span></div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-single.html"><img
                                            src="{{ asset('front/images/resource/products/prod-thumb-3.jpg')}}" alt=""></a></figure>
                                <h4><a href="shop-single.html">Built to Last</a></h4>
                                <div class="price">$24.99</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star-o light"></span></div>
                            </div>
                        </div>

                        <!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags style-two">
                            <div class="sidebar-title style-two">
                                <h2>Tag Cloud</h2>
                            </div>
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
