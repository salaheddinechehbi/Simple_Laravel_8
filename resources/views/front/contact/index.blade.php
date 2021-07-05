@extends('front.layouts.app')

@section('front_content')
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/background/3.jpg')}})">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-page-section">
    	<div class="auto-container">
        	<div class="inner-container">
            	<div class="clearfix">
                	<!--Content Column-->
                    <div class="content-column col-md-7 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	<h2>Contact Our Office</h2>
                            <div class="title-text">If you have any querry for related Interior & architecture… We are available...</div>
                            <div class="row clearfix">
                            
                            	<!--Column-->
                                <div class="column col-md-6 col-sm-12 col-xs-12">
                                	<h3>Main Branch</h3>
                                    <div class="location">Newyork</div>
                                    <ul class="contact-list">
                                    	<li>DE 198 Tech Road <br> Bridge Str, Newyork 10026 <br> United States.</li>
                                        <li><span>p:</span>+8 (321) 666-12-34</li>
                                        <li><span>E:</span>Support@Brugesny.com</li>
                                    </ul>
                                </div>
                                
                                <!--Tab Column-->
                                <div class="tab-column col-md-6 col-sm-12 col-xs-12">
                                	<div class="branches">Find Other Branches</div>
                                    
                                    <!--Branches Info Tabs-->
                                    <div class="branches-info-tabs">
                                        <!--Branch Tabs-->
                                        <div class="branch-tabs tabs-box">
                                        
                                            <!--Tab Btns-->
                                            <ul class="tab-btns tab-buttons clearfix">
                                                
                                                <li class="our-branches dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="toggle-text">Welmington</span> <span class="fa fa-angle-down"></span></a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                        <li data-tab="#prod-welmington" class="tab-btn active-btn" data-toggle-text="Welmington">Welmington</li>
                                                        <li data-tab="#prod-france" class="tab-btn" data-toggle-text="France">France</li>
                                                        <li data-tab="#prod-california" class="tab-btn" data-toggle-text="California">California</li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                            
                                            <!--Tabs Container-->
                                            <div class="tabs-content">
                                                
                                                <!--Tab / Active Tab-->
                                                <div class="tab active-tab" id="prod-welmington">
                                                    <div class="content">
                                                        <ul class="contact-list">
                                                            <li>PO Box 37188 Millon <br>Street, Welmington 11226 <br>United States.</li>
                                                            <li><span>p:</span>+3 (888) 755-1234</li>
                                                            <li><span>E:</span>Support@Brugeswl.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <!--Tab-->
                                                <div class="tab" id="prod-france">
                                                	<div class="content">
                                                        <ul class="contact-list">
                                                            <li>PO Box 37188 Millon <br>Street, Peris 11226 <br>France.</li>
                                                            <li><span>p:</span>+5 (888) 755-1234</li>
                                                            <li><span>E:</span>Support@Brugeswl.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <!--Tab-->
                                                <div class="tab" id="prod-california">
                                                	<div class="content">
                                                        <ul class="contact-list">
                                                            <li>PO Box 37188 Millon <br>Street, California 11226 <br>United States.</li>
                                                            <li><span>p:</span>+1 (888) 755-1234</li>
                                                            <li><span>E:</span>Support@Brugeswl.com</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column col-md-5 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" action="sendemail.php" id="contact-form">
                                    
                                    <div class="form-group">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject " required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="form-group btn-box">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                        
								</form>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Map Info Section-->
    <section class="map-section">
    	
        <!--Map Canvas-->
        <div class="map-canvas"
            data-zoom="12"
            data-lat="-37.817085"
            data-lng="144.955631"
            data-type="roadmap"
            data-hue="#ffc400"
            data-title="Envato"
            data-icon-path="{{ asset('front/images/icons/map-marker.png')}}"
            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
        </div>
        
	</section>

@endsection

