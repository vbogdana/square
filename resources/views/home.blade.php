



@extends('layouts.master')







@section('scripts')







@stop







@section('breadcrumb')



<!-- =============== START BREADCRUMB ================ -->



<section id="home" class="no-mb">



    <div class="row">



        <div class="col-sm-12">



            <div class="breadcrumb-fullscreen-parent phone-menu-bg">



                <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">



                    <div class="starTitle starVideo">



                        <h4><img src="<?php echo url("") ?>/images/kockalogo.png" alt="" class="s logo" style="height: 270px; width: 270px;"></h4>



                        <div class="grid__item">



                            <h1>



                                <div class="link link-yaku">



                                    <span><img src="<?php echo url("") ?>/images/slogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>



                                    <span><img src="<?php echo url("") ?>/images/qlogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>



                                    <span><img src="<?php echo url("") ?>/images/ulogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>



                                    <span><img src="<?php echo url("") ?>/images/alogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>



                                    <span><img src="<?php echo url("") ?>/images/rlogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>



                                    <span><img src="<?php echo url("") ?>/images/elogo.png" alt="" class="s logo" style="height: 70px; width: 70px;"></span>



                                </div>



                            </h1>



                        </div>



                        <h1 id="mainTitle">Belgrade +381 69 20 10 110</h1>



                    </div>



                <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/yU7u0x6LA3Q',containment:'.player',autoPlay:true, mute:true, startAt:0, opacity:1}"></div> 



                </div>



            </div>



        </div>



    </div>



</section>



<!-- =============== END BREADCRUMB ================ -->



@stop







<!-- zbog linkova u meniju ovde se mora redefinisati meni -->



@section('sidebar')



    <!-- Menu Fixed Container -->



    <div id="menu" class="menu-fixed-container">



        <nav>



            <div class="x-filter">



                <span></span>



                <span></span>



            </div>



            <ul>



                <li><a href="#home">home</a></li>



             <!--   <li><a href="#new-year">new year's</a></li> -->



                <li><a href="#events">events</a></li>



                <li><a href="#aboutUs">about us</a></li>



                <li><a href="#news">news from the club</a></li>



                <li><a href="#photos">photo gallery</a></li>



                <li><a href="#videos">video gallery</a></li>



                <li><a href="#ourDJ">our djs</a></li>



                <li><a href="#location">location</a></li>



                <li><a href="#contact">contact</a></li>



            </ul>



            <div class="x-filter">



                <span></span>



                <span></span>



            </div>



        </nav>



    </div>    



@stop







@section('content')



<!-- =============== START NEW YEAR SECTION ================ -->

<!--

<section id="new-year" class="shopHomePage padding hide-section">



    <div class="shopSection">



        <div class="container-fluid">



            <div class="shopContent">



                <div class="sectionTitle paddingBottom">



                    <span class="heading-t3"></span>



                    <h2>NEW YEAR'S</h2>



                    <span class="heading-b3"></span>



                </div><!-- end sectionTtile -->	


<!--
                <div class="row">



                    <div class="col-sm-3 col-sm-offset-1">



                        <nav class="shop-products">



                            <ul class="clearfix">



                                <li class="">



                                    <figure>



                                        <a href="{{ route("album", ["album" => "24122016"]) }}" class="info">



                                            <figcaption>



                                                <img src="<?php echo url("") ?>/images/events/new-year.png" alt="">



                                            </figcaption>



                                            <div class="content">



                                                <div class="eventHover">



                                                    <div class="event">



                                                        New Year's Eve 



                                                    </div>



                                                    <div class="fixLine"></div>



                                                    <div  class="evTitle"> SATURDAY </div>



                                                    <div class="evSubtitle">R'n'B | Hip Hop | House | The Nineties </div>



                                                    <div class="dateOfParty"> 



                                                        <div  class="evTitle"> date </div>



                                                        31/12/2016 



                                                    </div>



                                                </div>



                                            </div>



                                        </a>



                                    </figure>



                                </li>



                                <li class="">



                                    <figure>



                                        <a href="{{ route("album", ["album" => "25122016"]) }}" class="info"> 



                                            <figcaption>



                                                <img src="<?php echo url("") ?>/images/events/new-year-vol2.png" alt="">



                                            </figcaption>



                                            <div class="content">



                                                <div class="eventHover">



                                                    <div class="event">



                                                        Total RNB Night



                                                    </div>



                                                    <div class="fixLine"></div>



                                                    <div  class="evTitle"> SUNDAY  </div>



                                                    <div class="evSubtitle">DJ Prema</div>



                                                    <div class="dateOfParty"> 



                                                        <div  class="evTitle"> date </div>



                                                        01/01/2017 



                                                    </div>



                                                </div>



                                            </div>



                                        </a>



                                    </figure>



                                </li>



                            </ul>



                        </nav>



                    </div>



                    <div class="col-sm-6 col-sm-offset-1">



                        <div class="contactTop">



                            <h3>CLUB SQUARE</h3>



                            <h2>New Year's Eve Packages</h2>



                            



                            <a href="#contact">



                                <h4>If You wish to reserve Your place with us for New Year's Eve, please contact us.</h4> 



                            </a>



                            <div class="contactInfo">



                                <ul>



                                    <li>



                                        <span>CENTRAL VIP LOUNGE / SITTING PACKAGE</span>



                                        <br />



                                        Price is 1000 eur (included 15 tickets + 



                                        VIP entry, VIP table & 4 bottles included: 2 Piper Heidsieck champagne 



                                        and 2 premium bottle of choice Belvedere 0.7 /Jack Daniel's / Gin / Jeger)   



                                    </li>



                                    <li>



                                        <span>VIP LOUNGE / SITTING PACKAGE</span>



                                        <br />



                                        Price is 500 eur (included 10 tickets + 



                                        VIP entry, VIP table & 2 bottles included: 1 Piper Heidsieck champagne 



                                        and 1 premium bottle of choice Belvedere 0.7 /Jack Daniel's / Gin / Jeger)



                                    </li>



                                    <li>



                                        <span>VIP LOUNGE / SITTING PACKAGE</span>



                                        <br />



                                        Price is 400 eur (included 7 tickets + 



                                        VIP entry, VIP table & 2 bottles included: 1 Piper Heidsieck champagne 



                                        and 1 premium bottle of choice Belvedere 0.7 /Jack Daniel's / Gin / Jeger)



                                    </li>



                                    <li>



                                        <span>BIG VIP SITTING BAR TABLE PACKAGE</span>



                                        <br />



                                        Price is 300 eur (included 7 tickets + 



                                        Vip entry, Bar table in VIP area & 1 premium bottle included belvedere 



                                        0.7 / Piper Heidsieck champagne / Jack Daniel's / Gin / Jeger)







                                    </li>



                                    <li>



                                        <span>NORMAL VIP SITTING BAR TABLE PACKAGE</span>



                                        <br />



                                        Price is 250 eur (included 5 tickets + 



                                        Vip entry, VIP Bar table in VIP area & 1 premium bottle included 



                                        (belvedere 0.7 / Piper Heidsieck champagne / Jack Daniel's / Gin / Jeger)



                                    </li>



                                    <li>



                                        <span>BAR TABLE</span>



                                        <br />



                                        Price is 160 eur (included 4 tickets + bottle of your choice 



                                        Absolut / Balantines / Gin / Jeger / Tequila / Martini)



                                    </li>



                                    <li>



                                        <span>PLACE AT THE BAR / COMMUNITY TABLE</span>



                                        <br />



                                        Price is 0 eur. Tickets are 20 eur per person.



                                    </li>                                               



                                </ul>



                            </div>                                                      



                        </div>    



                    </div>



                </div>               



            </div>



        </div>



    </div>



</section>

//-->

<!-- =============== END NEW YEAR SECTION ================ -->







<!-- =============== START EVENTS SECTION ================ -->



<section id="events" class="shopHomePage padding hide-section">

    <div class="shopSection">

        <div class="container-fluid">

            <div class="shopContent">

                <div class="sectionTitle paddingBottom">

                    <span class="heading-t3"></span>

                    <h2>EVENTS</h2>

                    <span class="heading-b3"></span>

                </div><!-- end sectionTtile -->	

                <div class="row">

                    <nav class="shop-products">

                        <ul class="clearfix">
                            
                            <li class="col-sm-3">

                                <figure>

                                    <a href="{{ route("album", ["album" => "05012017"]) }}" class="info">

                                        <figcaption>

                                            <img src="<?php echo url("") ?>/images/events/thursday.png" alt="">

                                        </figcaption>

                                        <div class="content">

                                            <div class="eventHover">

                                                <div class="event">

                                                    The NINETIES

                                                </div>

                                                <div class="fixLine"></div>

                                                <div  class="evTitle">   THURSDAY </div>

                                                <div class="evSubtitle">DJ ALEX TIC</div>

                                                <div class="dateOfParty"> 

                                                    <div  class="evTitle"> next </div>

							  05/01/2017 

                                                </div>

                                            </div>

                                        </div>

                                    </a>

                                </figure>

                            </li>

                            <li class="col-sm-3">

                                <figure>

                                    <a href="{{ route("album", ["album" => "23122016"]) }}" class="info">

                                        <figcaption>

                                            <img src="<?php echo url("") ?>/images/events/friday.png" alt="">

                                        </figcaption>

                                        <div class="content">

                                            <div class="eventHover">

                                                <div class="event">

                                                    POP ROCK HITS

                                                </div>

                                                <div class="fixLine"></div>

                                                <div  class="evTitle"> FRIDAY </div>

                                                <div class="evSubtitle">Scandal Band</div>

                                                <div class="dateOfParty"> 

                                                    <div  class="evTitle"> next </div>

                                                    06/01/2017 

                                                </div>

                                            </div>

                                        </div>

                                    </a>

                                </figure>

                            </li>

                            <li class="col-sm-3">

                                <figure>

                                    <a href="{{ route("album", ["album" => "31122016"]) }}" class="info">

                                        <figcaption>

                                            <img src="<?php echo url("") ?>/images/events/saturday.png" alt="">

                                        </figcaption>

                                        <div class="content">

                                            <div class="eventHover">

                                                <div class="event">

                                                        Blood & mode

                                                </div>

                                                <div class="fixLine"></div>

                                                <div  class="evTitle"> SATURDAY </div>

                                                <div class="evSubtitle">COLLE & MARK FUNK  </div>

                                                <div class="dateOfParty"> 

                                                    <div  class="evTitle"> next </div>

                                                    07/01/2017 

                                                </div>

                                            </div>

                                        </div>

                                    </a>

                                </figure>

                            </li>

                            <li class="col-sm-3">

                                <figure>

                                    <a href="{{ route("album", ["album" => "01012017"]) }}" class="info"> 

                                        <figcaption>

                                            <img src="<?php echo url("") ?>/images/events/sunday.png" alt="">

                                        </figcaption>

                                        <div class="content">

                                            <div class="eventHover">

                                                <div class="event">

                                                    Total RNB Night

                                                </div>

                                                <div class="fixLine"></div>

                                                <div  class="evTitle"> SUNDAY  </div>

                                                <div class="evSubtitle">DJ Prema</div>

                                                <div class="dateOfParty"> 

                                                    <div  class="evTitle"> next </div>

                                                    08/01/2017 

                                                </div>

                                            </div>

                                        </div>

                                    </a>

                                </figure>

                            </li>
                            
			        
                        </ul>



                    </nav>



                </div>



            </div>



        </div>



    </div>



</section>



<!-- =============== END EVENTS SECTION ================ -->







<!-- =============== START BIOGRAPHY SECTION ================ -->



<section id="aboutUs" style="background-image:url(<?php echo url("") ?>/images/logoblack1.png);" class="biography padding background-properties hide-section" id="content">



    <div class="container">



        <div class="sectionTitle paddingBottom">



            <span class="heading-t3"></span>



            <h2>About Us</h2>



            <span class="heading-b3"></span>



        </div>



        <div class="row">



            <div class="col-sm-6">



                <p>



                    Club Square is among the best places to go out when it comes to winter Belgrade night clubs! Opened in October 2016 in the heart of Belgrade, this night club is certainly an unavoidable place to go for all the fans of RnB & House sound or Live music ... 



                    Club Square is in the beautiful area of the city, at address Studentski trg 15, near the luxury hotel Square Nine. It's luxurious and elegant ambiance, as well as modern lighting and lighting effects.



                </p>



            </div>



            <div class="col-sm-6">



                <p>



                    There play music the most famous local DJs. Attractive go-go dancers will try to bring the atmosphere to fever pitch. Night club Square is one of the most interesting places for foreigners who want to experience Belgrade nightlife.



                    In this place you can also meet many celebrities from the world fashion, music, business, lot of beautiful girls ...  They are driving all the guys crazy!



                    Night club is the perfect to celebrate a STAG PARTY in Belgrade!



                    Experience Hangover in Belgrade now !!!



                </p>



                <div class="signature">



                    <a href="<?php echo url("/") ?>">Club Square Belgrade</a>



                </div>



            </div>



        </div>



    </div>



</section>



<!-- =============== END BIOGRAPHY SECTION ================ -->







<!-- =============== START HOME-BLOG SECTION ================ -->	



<section id="news" class="padding hide-section background-properties blogHomeSection" style="background-image:url(<?php echo url("") ?>/images/bgnocu.jpg);">	



    <div class="container">



        <div class="row">



            <div class="sectionTitle">



                <span class="heading-t3"></span>



                <h2>News from the Club</h2>



                <span class="heading-b3"></span>



                <p>Here You will soon be able to read the latest news from our <a>blog.</a> </p>



            </div>



            <div class="col-sm-4">



                <div class="blogBox">	



                    <div class="imgBox"><img src="<?php echo url("") ?>/images/events/next_event.jpg" alt="box-img"></div>



                    <div class="blogBoxContent">



                        <div class="blogHeader">



                            <h1><a href="#">Last Friday in Square</a></h1>



                        </div>



                        <div class="admin-list clearfix">



                            <ul>



                                <li><a href="#">12 Dec 2016</a>&nbsp;&nbsp;</li>



                            </ul>



                        </div>



                        <div class="blogParagraph">



                            <p> Soon... </p>



                        </div>



                        <div class="rmButton">



                            <a href="#">Read More</a>



                        </div>			



                    </div>



                </div>



            </div>



            <div class="col-sm-4">



                <div class="blogBox">	



                    <div class="videoBox"><iframe src="https://www.youtube.com/embed/bGxoXtOc-HM" width="600" height="410"  ></iframe></div>



                    <div class="blogBoxContent">



                        <div class="blogHeader">



                            <h1><a href="#">Thursday in Square Belgrade!</a></h1>



                        </div>



                        <div class="admin-list clearfix">



                            <ul>



                                <li><a href="#">29 Dec 2017</a>&nbsp;&nbsp;</li>



                            </ul>



                        </div>



                        <div class="blogParagraph">



                            <p>Welcome to Square Club Belgrade - A new premier club in the heart of the city center. Experience the best nightlife Belgrade has to offer.

booking: +381 69 20 10 110 <br> Soon... </p>



                        </div>



                        <div class="rmButton">



                            <a href="#">Read More</a>



                        </div>			



                    </div>



                </div>



            </div>



            <div class="col-sm-4">



                <div class="blogBox">	



                     <div class="videoBox"><iframe src="https://www.youtube.com/embed/QuaDhnRifXk" width="600" height="410"  ></iframe></div>



                    <div class="blogBoxContent">



                        <div class="blogHeader">



                            <h1><a href="#">Sunday in Square Belgrade!</a></h1>



                        </div>



                        <div class="admin-list clearfix">



                            <ul>



                                <li><a href="#">01 Jan 2017</a>&nbsp;&nbsp;</li>



                            </ul>



                        </div>



                        <div class="blogParagraph">



                            <p>Welcome to Square Club Belgrade - A new premier club in the heart of the city center. Experience the best nightlife Belgrade has to offer.

booking: +381 69 20 10 110 <br> Soon... </p>



                        </div>



                        <div class="rmButton">



                            <a href="#">Read More</a>



                        </div>			



                    </div>



                </div>



            </div>



        </div>	



    </div>	



</section>



<!-- =============== END HOME-NLOG SECTION ================ -->







<!-- =============== START GALLERY SECTION ================ -->

<section id="photos" class="photoHome padding gallerySection" id="content">

    <div class="container" style="padding:0;">
        <div class="row">

            <div class="sectionTitle">

                <span class="heading-t3"></span>

                <h2>PHOTO GALLERY</h2>

                <span class="heading-b3"></span>

                <p>Check out our latest photos and follow us on <a href="https://www.facebook.com/SquareClubBelgrade">Facebook</a> 

                    or <a href="https://www.instagram.com/square_club_belgrade/">Instagram</a> to view more.</p>

            </div>

            <div class="col-sm-12">

                <div class="content-container clearfix">

                    <div class="single-photo-album-container">

                        <div class="row">
                            
                            <!-- Single Album Article -->

                            <article class="col-sm-4">

                                <figure>

                                    <!-- Single Album Image -->

                                    <figcaption>

                                        <div class="hovereffect">

                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_05012017/cover.jpg" alt="">

                                        </div>

                                    </figcaption>

                                    <div class="album-title">

                                        05/01/2017

                                    </div>

                                    <div class="content">

                                        <div class="eventHover">

                                            <div class="event">

                                                05/01/2017

                                            </div>

                                            <div class="fixLine"></div>

                                            <div  class="evSubtitle"> 

                                                <a href="{{ route("album", ["album" => "05012017"]) }}" class="info"> view album </a>

                                            </div>

                                        </div>

                                    </div>

                                </figure>

                            </article>
                            <!-- Single Album Article -->

                            <article class="col-sm-4">

                                <figure>

                                    <!-- Single Album Image -->

                                    <figcaption>

                                        <div class="hovereffect">

                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_02012017/cover.jpg" alt="">        

                                        </div>

                                    </figcaption>

                                    <div class="album-title">

                                        02/01/2017

                                    </div>

                                    <div class="content">

                                        <div class="eventHover">

                                            <div class="event">

                                                02/01/2017

                                            </div>

                                            <div class="fixLine"></div>

                                            <div  class="evSubtitle"> 

                                                <a href="{{ route("album", ["album" => "02012017"]) }}" class="info"> view album </a>

                                            </div>

                                        </div>

                                    </div>

                                </figure>

                            </article>

			 <!-- Single Album Article -->

                            <article class="col-sm-4">

                                <figure>
                                    <!-- Single Album Image -->
                                    <figcaption>

                                        <div class="hovereffect">
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_01012017/cover.jpg" alt="">        

                                        </div>

                                    </figcaption>
                                    <div class="album-title">
                                        
                                        01/01/2017

                                    </div>

                                    <div class="content">

                                        <div class="eventHover">

                                            <div class="event">

                                                01/01/2017

                                            </div>

                                            <div class="fixLine"></div>

                                            <div  class="evSubtitle"> 

                                                <a href="{{ route("album", ["album" => "01012017"]) }}" class="info"> view album </a>

                                            </div>

                                        </div>

                                    </div>

                                </figure>

                            </article>

			 <!-- Single Album Article -->

                            <article class="col-sm-4">

                                <figure>

                                    <!-- Single Album Image -->

                                    <figcaption>

                                        <div class="hovereffect">

                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_31122016/cover.jpg" alt="">

                                        </div>

                                    </figcaption>

                                    <div class="album-title">

                                        31/12/2016

                                    </div>

                                    <div class="content">

                                        <div class="eventHover">

                                            <div class="event">

                                                31/12/2016

                                            </div>

                                            <div class="fixLine"></div>

                                            <div  class="evSubtitle"> 

                                                <a href="{{ route("album", ["album" => "31122016"]) }}" class="info"> view album </a>

                                            </div>

                                        </div>

                                    </div>
                                </figure>

                            </article>
                         
                         <!-- Single Album Article -->

                            <article class="col-sm-4">

                                <figure>

                                    <!-- Single Album Image -->

                                    <figcaption>

                                        <div class="hovereffect">

                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_interior/cover.jpg" alt="">

                                        </div>

                                    </figcaption>

                                    <div class="content" id="interior">

                                        <div class="eventHover">

                                            <div class="event">

                                                interior

                                            </div>

                                            <div class="fixLine"></div>

                                            <div  class="evSubtitle"> 

                                                <a href="{{ route("album", ["album" => "interior"]) }}" class="info"> view album </a>

                                            </div>

                                        </div>

                                    </div>

                                </figure>

                            </article>


                            <!-- Single Album Article -->

                            <article class="col-sm-4">

                                <figure>

                                    <!-- Single Album Image -->

                                    <figcaption>

                                        <div class="hovereffect">

                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_29122016/cover.jpg" alt="">

                                        </div>

                                    </figcaption>

                                    <div class="album-title">

                                        29/12/2016

                                    </div>

                                    <div class="content">

                                        <div class="eventHover">

                                            <div class="event">

                                                29/12/2016

                                            </div>

                                            <div class="fixLine"></div>

                                            <div  class="evSubtitle"> 

                                                <a href="{{ route("album", ["album" => "29122016"]) }}" class="info"> view album </a>

                                            </div>

                                        </div>

                                    </div>

                                </figure>

                            </article>
                            
                            

			<!-- Single Album Article -->

                            <article class="col-sm-4">

                                <figure>

                                    <!-- Single Album Image -->

                                    <figcaption>

                                        <div class="hovereffect">

                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_25122016/cover.jpg" alt="">

                                        </div>

                                    </figcaption>

                                    <div class="album-title">

                                        25/12/2016

                                    </div>

                                    <div class="content">

                                        <div class="eventHover">

                                            <div class="event">

                                                25/12/2016

                                            </div>

                                            <div class="fixLine"></div>

                                            <div  class="evSubtitle"> 

                                                <a href="{{ route("album", ["album" => "25122016"]) }}" class="info"> view album </a>

                                            </div>

                                        </div>

                                    </div>

                                </figure>

                            </article>

			
                            <!-- Single Album Article -->

                            <article class="col-sm-4">

                                <figure>

                                    <!-- Single Album Image -->

                                    <figcaption>

                                        <div class="hovereffect">

                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_24122016/cover.jpg" alt="">

                                        </div>

                                    </figcaption>

                                    <div class="album-title">

                                        24/12/2016

                                    </div>

                                    <div class="content">

                                        <div class="eventHover">

                                            <div class="event">

                                                24/12/2016

                                            </div>

                                            <div class="fixLine"></div>

                                            <div  class="evSubtitle"> 

                                                <a href="{{ route("album", ["album" => "24122016"]) }}" class="info"> view album </a>

                                            </div>

                                        </div>

                                    </div>

                                </figure>

                            </article>
                            
			<article class="col-sm-4">

                                <figure>

                                    <!-- Single Album Image -->

                                    <figcaption>

                                        <div class="hovereffect">

                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_23122016/cover.jpg" alt="">

                                        </div>

                                    </figcaption>

                                    <div class="album-title">

                                        23/12/2016

                                    </div>

                                    <div class="content">

                                        <div class="eventHover">

                                            <div class="event">

                                                23/12/2016

                                            </div>

                                            <div class="fixLine"></div>

                                            <div  class="evSubtitle"> 

                                                <a href="{{ route("album", ["album" => "23122016"]) }}" class="info"> view album </a>

                                            </div>

                                        </div>

                                    </div>

                                </figure>

                            </article>

			
			
                            
                            <!-- Single Album Article -->
                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div>



</section>



<!-- =============== END GALLERY SECTION ================ -->







<!-- =============== START VIDEO SECTION ================ -->



<section id="videos" class="videoHome hide-section padding">



    <div class="container">



        <div class="row">



            <div class="sectionTitle">



                <span class="heading-t3"></span>



                <h2>VIDEO GALLERY</h2>



                <span class="heading-b3"></span>



                <p>Check out our latest videos and follow us on <a href="https://www.youtube.com/channel/UCYZ2dDvtu-ciQDaxhCGO2qA">Youtube</a> to view more.</p>



            </div>



            <div class="col-sm-4">



                <iframe width="560" height="315" src="https://www.youtube.com/embed/bGxoXtOc-HM"  allowfullscreen></iframe>



            </div>



            <div class="col-sm-4">



                <iframe width="560" height="315" src="https://www.youtube.com/embed/QuaDhnRifXk"  allowfullscreen></iframe>



            </div>



            <div class="col-sm-4">



                <iframe width="560" height="315" src="https://www.youtube.com/embed/ve1z3DgApB8"  allowfullscreen></iframe>



            </div>



        </div>



    </div>



</section>



<!-- =============== END VIDEO SECTION ================ -->







<!-- =============== START ALBUM COVER SECTION ================ -->



<section id="ourDJ" class="padding albumsHome hide-section background-properties" style="background-image:url(<?php echo url("") ?>/images/dj.jpg);">



    <div class="container">



        <div class="row">



            <div class="col-sm-12">



                <div class="sectionTitle paddingBottom">



                    <span class="heading-t3"></span>



                    <h2>OUR DJs</h2>



                    <span class="heading-b3"></span>



                </div>



            </div>



        </div>



        <div class="list-albums">



            <ul class="list-feature col-md-12 col-xs-12 col-sm-12">



                <li class="col-md-3 col-sm-3 col-xs-12">



                    <div class="album-icon">



                        <span class="thumbs-album">



                            <img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj1.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1">



                        </span>



                        <span class="disk"><img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj1cd.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></span>



                    </div>



                    <div class="name">



                        <h3>DJ Alex Tic</h3>						



                        <p>NINETIES</p>								



                    </div>



                </li>



                <li class="col-md-3 col-sm-3 col-xs-12">



                    <div class="album-icon albumIcon1">



                        <span class="thumbs-album">



                            <img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj2.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1">



                        </span>



                        <span class="disk"><img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj2cd.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></span>



                    </div>



                    <div class="name">



                        <h3>Scandal Band</h3>



                        <p>Pop Rock</p>								



                    </div>



                </li>



                <li class="col-md-3 col-sm-3 col-xs-12">



                    <div class="album-icon albumIcon2">



                        <span class="thumbs-album">



                            <img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj3.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1">



                        </span>



                        <span class="disk"><img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj3cd.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></span>



                    </div>



                    <div class="name">



                        <h3> DJ Colle & Mark Funk</h3>



                        <p>Mix R'n'B & House</p>								



                    </div>



                </li>



                <li class="col-md-3 col-sm-3 col-xs-12">



                    <div class="album-icon albumIcon3">



                        <span class="thumbs-album">



                            <img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj4.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1">



                        </span>



                        <span class="disk"><img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj4cd.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></span>



                    </div>



                    <div class="name">



                        <h3>DJ Prema</h3>



                        <p>R'n'B</p>								



                    </div>



                </li>	



            </ul>



        </div>



    </div>



</section>



<!-- =============== END ALBUM COVER SECTION ================ -->







<!-- =============== START MAP ================ -->



<section id="location" class="googleMap">



    <div class="container-fluid">



        <div class="row">



            <div class="col-sm-12">



                <div id="map-canvas" class="google-map" data-lat="44.820092" data-long="20.456819" data-img="<?php echo url("") ?>/images/blackpin.png" ></div>



            </div>



        </div>



    </div>







</section>



<!-- =============== END MAP ================ -->







@stop