@extends('front.layouts.app')

@section('front_content')

    <!--Main Slider-->
    <section class="main-slider">

        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="{{ asset('front/images/main-slider/image-1.jpg')}}" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="{{ asset('front/images/main-slider/image-1.jpg')}}">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-50','-160','-150','-130']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="icon-box">
                                <span class="icon flaticon-design"></span>
                            </div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['40','-70','-50','-50']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>We are The Best <br> Emotive & Creative</h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['130','30','30','15']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h1>Interiors</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','480']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['205','100','90','60']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">When you love your house, Your house loves you.</div>
                        </div>

                        <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['280','160','160','120']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <a href="about.html" class="theme-btn btn-style-one">Know About Us</a>
                        </div>

                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="{{ asset('front/images/main-slider/image-2.jpg')}}" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="{{ asset('front/images/main-slider/image-2.jpg')}}">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-50','-160','-150','-130']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="icon-box">
                                <span class="icon flaticon-decorating"></span>
                            </div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['40','-70','-50','-50']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Modular kitchen <br> Modern & Innovative</h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['130','30','30','15']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h1>Projects</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','480']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['205','100','90','60']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">When you love your house, Your house loves you.</div>
                        </div>

                        <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['280','160','160','120']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <a href="about.html" class="theme-btn btn-style-one">View Our Works</a>
                        </div>

                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="{{ asset('front/images/main-slider/image-3.jpg')}}" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="{{ asset('front/images/main-slider/image-3.jpg')}}">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-50','-160','-150','-130']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="icon-box">
                                <span class="icon flaticon-hotel-1"></span>
                            </div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['40','-70','-50','-50']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Provide Affortable & <br> Better Corpoarte</h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['130','30','30','15']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h1>Designing</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','480']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['205','100','90','60']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">When you love your house, Your house loves you.</div>
                        </div>

                        <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['600','700','650','460']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['280','160','160','120']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <a href="about.html" class="theme-btn btn-style-one">Customer Feeback</a>
                        </div>

                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!--Specialization Section-->
    <section class="specialization-section">
        <!--Title Box-->
        <div class="title-box" style="background-image:url({{ asset('front/images/background/pattern-1.png')}})">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-md-4 col-sm-12 col-xs-12">
                        <div class="sec-title light">
                            <h2>Our Specialization</h2>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="column col-md-8 col-sm-12 col-xs-12">
                        <div class="text">Being the largest in-home decorationg service in newyork city, you can work with
                            us from anywhere!.</div>
                    </div>
                </div>
            </div>
        </div>
        <!--Blocks Container-->
        <div class="blocks-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Special Block-->
                    <div class="special-block col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="big-letter">b</div>
                            <div class="text">We provide clients with the highest possible level <br> of service anywhere in
                                the world.</div>
                            <div class="row clearfix">

                                <!--Special Info Block-->
                                <div class="special-info-block col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon flaticon-house-plans"></span>
                                        </div>
                                        <h3>Interior</h3>
                                    </div>
                                </div>

                                <!--Special Info Block-->
                                <div class="special-info-block col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon flaticon-building"></span>
                                        </div>
                                        <h3>Architecture</h3>
                                    </div>
                                </div>

                                <!--Special Info Block-->
                                <div class="special-info-block col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon flaticon-sketch"></span>
                                        </div>
                                        <h3>Planning</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--Special Block Two-->
                    <div class="special-block-two alternate col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="content-box">
                                <h2>We stand out from all of our competitors.</h2>
                                <div class="text">Must explain you how all this mistaken idea of denouncing pleasure.</div>
                                <div class="signature"><span class="icon flaticon-check-form"></span> Freequote@Bruges.com
                                </div>
                            </div>
                            <div class="experiance-box">
                                <div class="inner">
                                    <h3>Years Of Experience</h3>
                                    <div class="number">14</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Specialization Section-->

    <!--Services Section-->
    <div class="services-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Services We Do</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="commercial-design.html"><img src="{{ asset('front/images/resource/services-1.jpg')}}" alt="" /></a>
                            <div class="category">Residential Design</div>
                        </div>
                        <div class="lower-content">
                            <div class="upper-box">
                                <div class="text">Desires to obtain pain of itself, because it‘s but because occasionally.
                                </div>
                            </div>
                            <div class="lower-box">
                                <a href="commercial-design.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="commercial-design.html"><img src="{{ asset('front/images/resource/services-2.jpg')}}" alt="" /></a>
                            <div class="category">Industrial Design</div>
                        </div>
                        <div class="lower-content">
                            <div class="upper-box">
                                <div class="text">Explain to you how this mistaken idea denouncing of pleasure.</div>
                            </div>
                            <div class="lower-box">
                                <a href="commercial-design.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="commercial-design.html"><img src="{{ asset('front/images/resource/services-3.jpg')}}" alt="" /></a>
                            <div class="category">Restaurant Design</div>
                        </div>
                        <div class="lower-content">
                            <div class="upper-box">
                                <div class="text">It is a long established fact that reader will be distracted looking.
                                </div>
                            </div>
                            <div class="lower-box">
                                <a href="commercial-design.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="btn-box text-center">
                <a href="services.html" class="theme-btn btn-style-two">View all</a>
            </div>

        </div>
    </div>
    <!--End Services Section-->

    <!--Choose Section-->
    <section class="choose-section" style="background-image:url({{ asset('front/images/background/1.jpg')}})">
        <div class="auto-container">
            <div class="sec-title light">
                <h2>Why Choose Us</h2>
                <div class="separator light"></div>
            </div>
            <div class="row clearfix">

                <!--Servives Block Two-->
                <div class="services-block-two col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="bg-layer"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-trophy-1"></span>
                        </div>
                        <h2><a href="commercial-design.html">Consecutive Award <br> Winning Team</a></h2>
                        <div class="text">Desires to obtain pain of itself, because it is pain, but because occasionally
                            pleasure except to obtain some advantage.</div>
                        <a href="commercial-design.html" class="read-more">Read More</a>
                    </div>
                </div>

                <!--Servives Block Two-->
                <div class="services-block-two active col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="bg-layer"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-buildings"></span>
                        </div>
                        <h2><a href="commercial-design.html">We are Experienced and <br> Creative Designers.</a></h2>
                        <div class="text">Desires to obtain pain of itself, because it is pain, but because occasionally
                            pleasure except to obtain some advantage.</div>
                        <a href="commercial-design.html" class="read-more">Read More</a>
                    </div>
                </div>

                <!--Servives Block Two-->
                <div class="services-block-two col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="bg-layer"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-quality"></span>
                        </div>
                        <h2><a href="commercial-design.html">High Quality Products <br> Only Used</a></h2>
                        <div class="text">Desires to obtain pain of itself, because it is pain, but because occasionally
                            pleasure except to obtain some advantage.</div>
                        <a href="commercial-design.html" class="read-more">Read More</a>
                    </div>
                </div>

                <!--Servives Block Two-->
                <div class="services-block-two col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="bg-layer"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-support"></span>
                        </div>
                        <h2><a href="commercial-design.html">24/7 Customer Support <br> Available</a></h2>
                        <div class="text">Desires to obtain pain of itself, because it is pain, but because occasionally
                            pleasure except to obtain some advantage.</div>
                        <a href="commercial-design.html" class="read-more">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Choose Section-->

    <!--Project Section-->
    <section class="project-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Latest Projects</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

                <!--Project Block-->
                <div class="project-block col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('front/images/gallery/project-1.jpg')}}" alt="" />
                        </div>
                        <div class="overlay-box">
                            <div class="category"><span class="icon flaticon-hotel-1"></span> Residential</div>
                            <div class="content">
                                <h2>Modern Living Room</h2>
                                <a href="project-single.html" class="link-box">Must explain to you how all this idea...
                                    <span class="icon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Block-->
                <div class="project-block col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('front/images/gallery/project-2.jpg')}}" alt="" />
                        </div>
                        <div class="overlay-box">
                            <div class="category"><span class="icon flaticon-online-store"></span> Commercial</div>
                            <div class="content">
                                <h2>Modern Commercial Building</h2>
                                <a href="project-single.html" class="link-box">Must explain to you how all this idea...
                                    <span class="icon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Project Block-->
                <div class="project-block col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('front/images/gallery/project-3.jpg')}}" alt="" />
                        </div>
                        <div class="overlay-box">
                            <div class="category"><span class="icon flaticon-residential-block"></span> Restaurant</div>
                            <div class="content">
                                <h2>Koubba Luxury Bar</h2>
                                <a href="project-single.html" class="link-box">Must explain to you how all this idea...
                                    <span class="icon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Project Block-->
                <div class="project-block col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('front/images/gallery/project-4.jpg')}}" alt="" />
                        </div>
                        <div class="overlay-box">
                            <div class="category"><span class="icon flaticon-hotel-1"></span> Residential</div>
                            <div class="content">
                                <h2>Wooden Small House</h2>
                                <a href="project-single.html" class="link-box">Must explain to you how all this idea...
                                    <span class="icon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="btn-box text-center">
                <a href="project-fullwidth.html" class="theme-btn btn-style-two">View all</a>
            </div>

        </div>
    </section>
    <!--End Project Section-->

    <!--Testimonial Section-->
    <section class="testimonial-section" style="background-image:url({{ asset('front/images/background/pattern-2.png')}})">
        <div class="auto-container">
            <!--Title Box-->
            <div class="title-box">
                <div class="row clearfix">
                    <div class="column col-md-4 col-sm-12 col-xs-12">
                        <div class="sec-title">
                            <h2>Customer Feedback</h2>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="column col-md-8 col-sm-12 col-xs-12">
                        <div class="text">Being the largest in-home decorationg service in newyork city, you can work with
                            us from anywhere!.</div>
                    </div>
                </div>
            </div>

            <div class="two-item-carousel owl-carousel owl-theme">

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="clearfix">

                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/testimonial-1.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="content">
                                        <div class="text">Denouncing pleasure praising pain was born and I will give you a
                                            complete account of the system, and expound.</div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                        <h3>Teena Venanda</h3>
                                        <div class="locations">California</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="clearfix">

                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/testimonial-2.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="content">
                                        <div class="text">Take a trivial example, which of us every undertakes laborious
                                            physical exerce, exception obtain some advantage. </div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                        <h3>William Astley</h3>
                                        <div class="locations">New York</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="clearfix">

                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/testimonial-1.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="content">
                                        <div class="text">Denouncing pleasure praising pain was born and I will give you a
                                            complete account of the system, and expound.</div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                        <h3>Teena Venanda</h3>
                                        <div class="locations">California</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="clearfix">

                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/testimonial-2.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="content">
                                        <div class="text">Take a trivial example, which of us every undertakes laborious
                                            physical exerce, exception obtain some advantage. </div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                        <h3>William Astley</h3>
                                        <div class="locations">New York</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="clearfix">

                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/testimonial-1.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="content">
                                        <div class="text">Denouncing pleasure praising pain was born and I will give you a
                                            complete account of the system, and expound.</div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                        <h3>Teena Venanda</h3>
                                        <div class="locations">California</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="clearfix">

                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/testimonial-2.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-column">
                                    <div class="content">
                                        <div class="text">Take a trivial example, which of us every undertakes laborious
                                            physical exerce, exception obtain some advantage. </div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                        <h3>William Astley</h3>
                                        <div class="locations">New York</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--End Testimonial Section-->

    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Latest News</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-single.html"><img src="{{ asset('front/images/resource/news-1.jpg')}}" alt="" /></a>
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
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-single.html"><img src="{{ asset('front/images/resource/news-2.jpg')}}" alt="" /></a>
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
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-single.html"><img src="{{ asset('front/images/resource/news-3.jpg')}}" alt="" /></a>
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

            </div>
        </div>
    </section>
    <!--End News Section-->

    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!--Counter Column-->
                    <div class="counter-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h2>Our achivements</h2>
                                <div class="separator"></div>
                            </div>

                            <div class="fact-counter">

                                <div class="row clearfix">

                                    <!--Column-->
                                    <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                        <div class="inner">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2500" data-stop="2.5">0</span>k
                                            </div>
                                            <h4 class="counter-title">Projects Worked</h4>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                        <div class="inner">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2500" data-stop="376">0</span>
                                            </div>
                                            <h4 class="counter-title">Creative Concepts</h4>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                        <div class="inner">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2000" data-stop="23">0</span>
                                            </div>
                                            <h4 class="counter-title">Awards Holded</h4>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <a href="project-grid.html" class="theme-btn btn-style-two">Start Your Project</a>

                        </div>
                    </div>

                    <!--Clients Column-->
                    <div class="clients-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="row clearfix">
                                <div class="column col-md-4 col-sm-4 col-xs-12">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('front/images/clients/1.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="column col-md-4 col-sm-4 col-xs-12">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('front/images/clients/2.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="column col-md-4 col-sm-4 col-xs-12">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('front/images/clients/3.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="column col-md-4 col-sm-4 col-xs-12">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('front/images/clients/4.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="column col-md-4 col-sm-4 col-xs-12">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('front/images/clients/5.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="column col-md-4 col-sm-4 col-xs-12">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('front/images/clients/6.png')}}" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Default Section-->

@endsection
