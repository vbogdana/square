<!DOCTYPE html>
<!--
    Tutorial za Laravel templates https://laravel.com/docs/5.3/blade
    Tutorial za Laravel strukturu direktorijuma https://laravel.com/docs/5.3/structure
-->
<html>
    <head>  
        <meta charset="UTF-8">
        <meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="NEKI OPIS SAJTA" />
	
	<title>Club Square Belgrade - STUDENTSKI TRG 15</title>
	<link rel="icon" href="favicon.ico">
	<!-- ========== CSS INCLUDES ========== -->
	<link rel="stylesheet" href="<?php echo url("") ?>/css/master.css">
        <!-- 
            css i js fajlovi
            ovde treba da budu navedeni svi css i js fajlovi zajednicki za sve stranice
            skladiste se u folderu public/css i public/js (u odnosu na root)        
        -->
        <!-- Include style sheets common for all pages -->
        <!-- Include scripts common for all pages -->
        <!-- Include jQuery -->
        <!--   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!--   <script type="text/javascript" src="<?php echo url('/') ?>/js/jquery.mobile-1.4.5.js"></script>
        <!-- Include the YT API Library -->
        <!--   <script type='text/javascript' src='http://www.youtube.com/iframe_api'></script>
        <!-- za svaku stranicu treba definisati sekciju scripts koja uvozi css i js fajlove potrebne za tu stranicu -->
        @yield('scripts')
    </head>

    <body>
        
        <div class="page-loader">
            <div class="vertical-align align-center">
                <img src="<?php echo url("") ?>/images/loader.gif" alt="" class="loader-img">
            </div>
	</div>

              
        <!-- menu se definise ovde jer ce biti isti za sve stranice -->
        @section('sidebar')
        <!-- =============== START BREADCRUMB ================ -->
        <!--
        <section class="no-mb">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb-fullscreen-parent phone-menu-bg">
                        <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('assets/img/header/header.png');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                            <div id="home" style="position: absolute;left: 0;top: 0;">
                                <div class="intro-header">
                                    <div class="js-height-full star" style="height: 955px;">
                                        <div class="star-pattern-1 js-height-full" style="height: 994px;"></div>
                                        <div class="col-sm-12"> 
                                            <div class="starTitle">
                                                <h4>Club</h4>
                                                <div class="grid__item">
                                                    <h1>
                                                        <a class="link link-yaku" href="#">
                                                            <span>S</span><span>Q</span><span>U</span><span>A</span><span>R</span><span>E</span>					
                                                        </a>
                                                    </h1>
                                                </div>
                                                <h4>Belgrade,STUDENTSKI TRG 15</h4>
                                            </div>
                                            <canvas class="cover" width="1920" height="955"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->
        
        <section class="no-mb">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb-fullscreen-parent phone-menu-bg">
                        <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                            <div class="starTitle starVideo">
                                <h4><img src="<?php echo url("") ?>/images/kockalogo.png" alt="" class="s logo" style="height: 270px; width: 270px;"></h4>
                                <div class="grid__item">
                                    <h1>
                                        <a class="link link-yaku" href="#">
                                            <span><img src="<?php echo url("") ?>/images/slogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>
                                            <span><img src="<?php echo url("") ?>/images/qlogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>
                                            <span><img src="<?php echo url("") ?>/images/ulogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>
                                            <span><img src="<?php echo url("") ?>/images/alogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>
                                            <span><img src="<?php echo url("") ?>/images/rlogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>
                                            <span><img src="<?php echo url("") ?>/images/elogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>
                                        </a>
                                    </h1>
                                </div>
                                <h4>Belgrade,STUDENTSKI TRG 15</h4>
                            </div>
                            <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/VRjdddZosEU',containment:'.player',autoPlay:true, mute:true, startAt:0, opacity:1}">

                            </div>
                        </div>
                    </div><!--end bread  -->
                </div>
            </div>
        </section>
	<!-- =============== END BREADCRUMB ================ -->
	
	<!-- =============== START TOP HEADER ================ -->
        <div class="topHeader" >
            <div class="header">
                <div class="rightTopHeader">
                    <!-- Open Menu Button -->
                    <a class="open-menu">
                        <!-- Buttons Bars -->
                        <span class="span-1"></span>
                        <span class="span-2"></span>
                        <span class="span-3"></span>
                    </a>
                </div><!-- end rightTopHeader -->
            </div><!-- end header -->
            <!-- Menu Fixed Container -->
            <div class="menu-fixed-container">
                <!-- Menu Fixed Centred Container -->
                <nav>
                    <!-- Menu Fixed Close Button -->
                    <div class="x-filter">
                        <span></span>
                        <span></span>
                    </div>
                    <!-- Menu Fixed Primary List -->
                    <ul>
                        <!-- Menu Fixed Item -->
                        <li>
                            <a href="index.html">
                                home
                            </a>
                            <ul class="sub-menu">
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="index.html">
                                        home star
                                    </a>
                                </li>
                                <li>
                                    <a href="index-royal-slider.html">
                                        home royal slider
                                    </a>
                                </li>
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="index-video.html">
                                        home video 
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="albumsGrid.html">
                                discography
                            </a>
                            <ul class="sub-menu">
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="albumsFullBackground.html">
                                        albums full background
                                    </a>
                                </li>
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="albumsGrid.html">
                                        albums grid
                                    </a>
                                </li>
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="albumsSingle1.html">
                                        album description
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Menu Fixed Item -->
                        <li>
                            <a href="events.html">
                                events
                            </a>
                        </li>
                        <!-- Menu Fixed Item -->
                        <li>
                            <a href="#">
                                blog
                            </a>
                            <ul class="sub-menu">
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="blogGrid.html">
                                        blog grid
                                    </a>
                                </li>
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="blogSidebarRight.html">
                                        blog sidebar
                                    </a>
                                </li>
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="blogSingle.html">
                                        blog single
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Menu Fixed Item -->
                        <li>
                            <a href="#">
                                gallery
                            </a>
                            <ul class="sub-menu">
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="galleryGrid.html">
                                        albums grid
                                    </a>
                                </li>
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="galleryScroll.html">
                                        albums scroll
                                    </a>
                                </li>
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="gallerySingle.html">
                                        gallery single
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Menu Fixed Item -->
                        <li>
                            <a href="#">
                                Other Pages
                            </a>
                            <ul class="sub-menu">
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="biography.html">
                                        Biography
                                    </a>
                                </li>
                                <!-- Menu Fixed Sub Menu Item -->
                                <li>
                                    <a href="video.html">
                                        Video
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Menu Fixed Item -->
                        <li>
                            <a href="contact.html">
                                contact
                            </a>
                        </li>
                        <!-- Menu Fixed Item -->
                        <li>
                            <a href="shop.html">
                                shop
                            </a>
                        </li>
                    </ul>
                    <!-- Menu Fixed Close Button -->
                    <div class="x-filter">
                        <span></span>
                        <span></span>
                    </div>
                </nav>
            </div><!-- end menu-fixed-container -->
            <!-- =============== STAR LOGO ================ -->
            <div class="logo-container-top">
                <a href="<?php echo url("/") ?>">
                    <img src="<?php echo url("") ?>/images/logowhite.png" alt="Square Logo">
                </a>
            </div><!-- end logo-container-top -->
            <!-- =============== END LOGO ================ -->
        </div><!-- end topHeader -->
        <!-- =============== END TOP HEADER ================ -->
        @show
        
        <!-- 
            za svaku stranicu treba definisati content sekciju (sadrzaj)
            sve slike se skladiste u public/images folderu
            svi css i js fajlovi u public/css i public/js
            za kontrolere pogledati na google-u gde tacno stoje
            za svaku novu stranicu obavezno dodati rutu u routes/web.php fajlu
        -->      
        @yield('content')
            
  
        <!-- footer se definise ovde jer ce biti isti za sve stranice -->
        @section ('footer')
        <!-- =============== START FOOTER ================ -->
        <section style="background-color:#eeeeee;" class="hide-section">
            <div class="footer footerPadding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="copyFooter">
                                <a href="#">&copy; code 581 2016</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <nav class="social-icons">
                                <ul class="clearfix">
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-twitter"></i><span></span></a></li>
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-facebook"></i><span></span></a></li>
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-apple"></i><span></span></a></li>
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-lastfm"></i><span></span></a></li>
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-soundcloud"></i><span></span></a></li>
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-youtube-play"></i><span></span></a></li>
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-vimeo"></i><span></span></a></li>  
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-4">
                            <div class="goTop back-to-top" id="back-to-top">
                                <i class="fa fa-angle-up"></i>
                                <a href="#">Go Top</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =============== END FOOTER ================ -->

        <!-- ================================================== -->
        <!-- =============== START JQUERY SCRIPTS ================ -->
        <!-- ================================================== -->
        <script src="<?php echo url("") ?>/js/jquery.js"></script>
        <script src="<?php echo url("") ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo url("") ?>/js/jquery.jplayer.js"></script>
        <script src="<?php echo url("") ?>/js/jPlayer.js"></script>
        <script src="<?php echo url("") ?>/js/plugins.js"></script>
        <!--<script src="<?php echo url("") ?>/js/main.js"></script>-->
        <script src="<?php echo url("") ?>/js/map.js"></script>
        <script src="<?php echo url("") ?>/js/mainVideo.js"></script>
        <!--[if lte IE 9 ]>
                <script src="assets/js/placeholder.js"></script>
                <script>
                        jQuery(function() {
                                jQuery('input, textarea').placeholder();
                        });
                </script>
        <![endif]-->
        <!-- ================================================== -->
        <!-- =============== END JQUERY SCRIPTS ================ -->
        <!-- ================================================== -->
        @show
        
    </body>
</html>
