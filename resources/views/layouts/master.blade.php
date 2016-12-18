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
        <link rel="icon" href="<?php echo url("") ?>/favicon.ico">
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

    <body id="top">
        <!-- Social plugin scripts -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!-- -->
        
        <!-- gif za loading stranice -->
        <div class="page-loader">
            <div class="vertical-align align-center">
                <img src="<?php echo url("") ?>/images/loader.gif" alt="" class="loader-img">
            </div>
        </div>

        @yield('breadcrumb')

        <!-- menu se definise ovde jer ce biti isti za sve stranice -->
        <!-- =============== START TOP HEADER ================ -->
        <div class="topHeader">
            <!-- Open Menu Button -->
            <div class="header">
                <div class="rightTopHeader">
                    <a class="open-menu">
                        <span class="span-1"></span>
                        <span class="span-2"></span>
                        <span class="span-3"></span>
                    </a>
                </div>
            </div>

            <!-- =============== LOGO ================ -->
            <div class="logo-container-top">
                <a href="<?php echo url("/") ?>">
                    <img src="<?php echo url("") ?>/images/logowhite.png" alt="Square Logo">
                </a>
            </div>

            <div class="logo-container-top middle">
                <a class="open-reservation" href="#">
                    ONLINE RESERVATION
                </a>
            </div>

            @section('sidebar')
            <!-- Menu Fixed Container -->
            <div id="menu" class="menu-fixed-container">
                <nav>
                    <div class="x-filter">
                        <span></span>
                        <span></span>
                    </div>
                    <ul>
                        <li><a href="{{ route("/") }}#home">home</a></li>
                        <li><a href="{{ route("/") }}#events">events</a></li>
                        <li><a href="{{ route("/") }}#aboutUs">about us</a></li>
                        <li><a href="{{ route("/") }}#news">news from the club</a></li>
                        <li><a href="{{ route("/") }}#photos">photo gallery</a></li>                       
                        <li><a href="{{ route("/") }}#videos">video gallery</a></li>
                        <li><a href="{{ route("/") }}#ourDJ">our djs</a></li>
                        <li><a href="{{ route("/") }}#location">location</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                    <div class="x-filter">
                        <span></span>
                        <span></span>
                    </div>
                </nav>
            </div>
            @show
            
            <!-- Online reservation -->
            <div id="reservation" class="menu-fixed-container">
                <nav>
                    <div class="x-filter">
                        <span></span>
                        <span></span>
                    </div>
                    <!-- =============== START RESERVATION ================ -->
                    <section id="onlineReservation" class="onlineReservation contactSingle background-properties" >
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-sm-7">
                                    <div class="singleBlogForm">
                                        <h2>Reservation</h2>
                                        {{ Form::open(array('action' => 'ContactController@reserve')) }}
                                        <div class="comment-form">
                                            <input id="firstName" name="firstName" type="text" value="" aria-required="true" required="" placeholder="First Name *" autocomplete="off">
                                            <input id="lastName" name="lastName" type="text" value="" aria-required="true" required="" placeholder="Last Name *" autocomplete="off">
                                            <input id="phone" name="phone" type="text" value="" aria-required="true" required="" placeholder="Phone Number *" autocomplete="off">
                                            <select id="people" name="people" aria-required="true" required="">
                                                <option value="2-5">2-5 people</option>
                                                <option value="5-8">5-8 people</option>
                                                <option value="8-12">8-12 people</option>
                                                <option value="12+">12+ people</option>
                                            </select>
                                            <select id="seating" name="seating" aria-required="true" required="">
                                                <option value="Separe">Booth (min consumption 250€)</option>
                                                <option value="Visoko sedenje">High seating (min consumption 100€)</option>
                                                <option value="Barski sto">Bar table (min consumption 30€)</option>
                                                <option value="Pult">Bar (without conditions)</option>
                                            </select> 
                                            <select id="day" name="day" aria-required="true" required="">
                                                <option value="Cetvrtak 22.12.2016.">Thursday | 22.12.2016. | The Nineties</option>
                                                <option value="Petak 23.12.2016.">Friday | 23.12.2016. | Make Some Love</option>
                                                <option value="Subota 24.12.2016.">Saturday | 24.12.2016. | Blood & Mode</option>
                                                <option value="Nedelja 25.12.2016." selected="true">Sunday | 25.12.2016. | Total RnB</option>
                                            </select>                                             
                                            <textarea id="content" name="content" placeholder="Message..." rows="4"></textarea>
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" value="Make reservation">
                                            </p>
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 col-sm-offset-1">
                                    <div class="contactTop">
                                        <h3>Club Square</h3>
                                        <a href="tel:+381692010110">
                                            <h4>
                                                +381 69 20 10 110
                                                <br />
                                                SMS, WhatsApp and Viber
                                            </h4>
                                        </a>
                                        <p>
                                            Reservations are required!
                                            Reservations are valid until 00:30h.
                                            Please leave us Your contact phone, so that we can send You a confirmation message.
                                        </p>
                                        
                                        <h4> Working hours </h4>
                                        <div class="contactInfo">
                                            <ul>
                                                <li>Thursday 23:30 - 05h </li>
                                                <li>Friday 23:30 - 05h </li>
                                                <li>Saturday 23:30 - 05h </li>
                                                <li>Sunday 23:30 - 05h </li>                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- =============== END RESERVATION ================ -->
                    <div class="x-filter">
                        <span></span>
                        <span></span>
                    </div>
                </nav>       
            </div>   
            
        </div>
        <!-- =============== END TOP HEADER ================ -->       

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
        <!-- =============== START CONTACT ================ -->
        <section class="footerWide contactSingle padding background-properties" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contactTop">
                            <h2>Contact Information</h2>
                            <h3>CLUB SQUARE</h3>
                            <h4>STUDENTSKI TRG 15, 11000 Belgrade, Serbia</h4>                          
                            <div class="contactInfo">
                                <h4> Working hours </h4>
                                <ul>
                                    <li>Thursday 23:30 - 05h </li>
                                    <li>Friday 23:30 - 05h </li>
                                    <li>Saturday 23:30 - 05h </li>
                                    <li>Sunday 23:30 - 05h </li>                                               
                                </ul>
                            </div>                            
                            <div class="contactInfo">
                                <h4> Contact information </h4>
                                <ul>
                                    <li>Email: <a href="mailto:office@squareclubbelgrade.com">office@squareclubbelgrade.com</a></li>
                                    <li>Phone: <a href="tel:+381692010110">+381 69 20 10 110</a></li>
                                    <li>SMS, WhatsApp and Viber</li>
                                </ul>
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-7 col-sm-offset-1">                        
                        <div class="singleBlogForm">
                            <a href='https://www.facebook.com/SquareClubBelgrade'>
                                <h2>We are on Facebook, follow us!</h2>
                            </a>
                            <div class="fb-page" data-href="https://www.facebook.com/SquareClubBelgrade" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/SquareClubBelgrade" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/SquareClubBelgrade">Square Club Belgrade</a>
                                </blockquote>
                            </div>
                            <a href="https://www.instagram.com/square_club_belgrade/">
                                <h2 id="instagram" >We are on Instagram, follow us!</h2>
                            </a>
                            <!-- SnapWidget -->
                            <script src="https://snapwidget.com/js/snapwidget.js"></script>
                            <iframe src="https://snapwidget.com/embed/301262" class="snapwidget-widget" allowTransparency="true" frameborder="0" 
                                    scrolling="no" style="border:none; overflow:hidden; width:100%; ">
                            </iframe>
                        </div>                       
                    </div>                    
                </div>
            </div>           
        </section>
        <!-- =============== END CONTACT ================ -->
        <!-- =============== START FOOTER ================ -->
        <section style="background-color:#eeeeee;" class="hide-section">
            <div class="footer footerPadding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="copyFooter">
                                Design by
                                <a href="http://www.code581.rs">&copy; 2016  code 581 </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <nav class="social-icons">
                                <ul class="clearfix">
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-twitter"></i><span></span></a></li>
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-facebook"></i><span></span></a></li>
                                    <li><a href="#" class="icon-button shopIcon"><i class="fa fa-youtube-play"></i><span></span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-4">
                            <div class="goTop back-to-top" id="back-to-top">
                                <i class="fa fa-angle-up"></i>
                                <a href="#top">Go Top</a>
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
