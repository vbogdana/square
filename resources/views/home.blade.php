
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
                        <h4>Belgrade,STUDENTSKI TRG 15</h4>
                    </div>
                    <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/VRjdddZosEU',containment:'.player',autoPlay:true, mute:true, startAt:0, opacity:1}"></div>
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
                <li><a href="#events">events</a></li>
                <li><a href="#aboutUs">about us</a></li>
                <li><a href="#videos">video gallery</a></li>
                <li><a href="#photos">photo gallery</a></li>
                <li><a href="#ourDJ">our djs</a></li>
                <li><a href="#news">news from the club</a></li>
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
<!-- =============== START EVENTS SECTION ================ -->
<section id="events" class="shopHomePage padding hide-section">
    <div class="shopSection">
        <div class="container-fluid">
            <div class="shopContent">
                <div class="sectionTitle paddingBottom">
                    <span class="heading-t3"></span>
                    <h2><a href="">EVENTS</a></h2>
                    <span class="heading-b3"></span>
                </div><!-- end sectionTtile -->	
                <div class="row">
                    <nav class="shop-products">
                        <ul class="clearfix">
                            <li class="col-sm-3">
                                <figure><a href="{{ route("album", ["album" => "08122016"]) }}" class="info">
                                    <figcaption>
                                        <img src="<?php echo url("") ?>/images/events/thursday.jpg" alt="">
                                    </figcaption>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                The NINETIES
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evTitle"> THURSDAY  </div>
                                            <div class="evSubtitle">DJ ALEX TIC</div>
                                            <div class="dateOfParty"> 
                                                <div  class="evTitle"> next </div>
                                                15/12/2016 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </figure>
                            </li>
                            <li class="col-sm-3">
                                <figure><a href="{{ route("album", ["album" => "09122016"]) }}" class="info">
                                    <figcaption>
                                        <img src="<?php echo url("") ?>/images/events/friday.jpg" alt="">
                                    </figcaption>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                Live Music Hits
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evTitle"> FRIDAY </div>
                                            <div class="evSubtitle">Scandal Band</div>
                                            <div class="dateOfParty"> 
                                                <div  class="evTitle"> next </div>
                                                16/12/2016 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </figure>
                            </li>
                            <li class="col-sm-3">
                                <figure><a href="{{ route("album", ["album" => "10122016"]) }}" class="info">
                                    <figcaption>
                                        <img src="<?php echo url("") ?>/images/events/saturday.jpg" alt="">
                                    </figcaption>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                Blood & Mode 
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evTitle"> SATURDAY </div>
                                            <div class="evSubtitle">COLLE & MARC FUNK </div>
                                            <div class="dateOfParty"> 
                                                <div  class="evTitle"> next </div>
                                                17/12/2016 
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </figure>
                            </li>
                            <li class="col-sm-3">
                                <figure><a href="{{ route("album", ["album" => "11122016"]) }}" class="info"> 
                                    <figcaption>
                                        <img src="<?php echo url("") ?>/images/events/sunday.jpg" alt="">
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
                                                18/12/2016 
                                            </div>
                                        </div>
                                    </div>
                                </a></figure>
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
            <h2><a href="#">About Us</a></h2>
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


<!-- =============== START EVENTS SECTION-2 ================ -->
<!--
<section class="padding hide-section countdownSection background-properties" style="background-image: url(../public/images/events/next_event.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"> 
                <div class="countdownTitle">
                    <h4>Next Event</h4>
                    <div class="fixLine"></div>
                </div>
                <div class="sm-countdown sm_content_element sm-style2" id="sm_countdown-19" data-date="2016/12/8">
                    <div class="displayCounter">
                        <div class="column">
                            <div class="sm_countdown_inner">
                                <input class="element days" readonly="readonly" data-min="0" data-max="365" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
                                <span class="unit days-title">days</span>
                            </div>
                        </div>	
                        <div class="column">
                            <div class="sm_countdown_inner">
                                <input class="element hour" readonly="readonly" data-min="0" data-max="24" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
                                <span class="unit hours-title">hrs</span>
                            </div>
                        </div>	
                        <div class="column"> 
                            <div class="sm_countdown_inner">
                                <input class="element minute" readonly="readonly" data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
                                <span class="unit mins-title">min</span>
                            </div>
                        </div>
                        <div class="column"> 
                            <div class="sm_countdown_inner">
                                <input class="element second" readonly="readonly" data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
                                <span class="unit secs-title">sec</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!-- =============== END EVENTS SECTION-2 ================ -->

<!-- =============== START VIDEO SECTION ================ -->
<section id="videos" class="videoHome hide-section padding">
    <div class="container">
        <div class="row">
            <div class="sectionTitle">
                <span class="heading-t3"></span>
                <h2><a href="#">VIDEO GALLERY</a></h2>
                <span class="heading-b3"></span>
                <p>Check out our latest videos and follow us on <a href="https://www.youtube.com/channel/UCYZ2dDvtu-ciQDaxhCGO2qA">Youtube</a> to view more.</p>
            </div>
            <div class="col-sm-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VRjdddZosEU"  allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/MptSRokgwhg"  allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ve1z3DgApB8"  allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!-- =============== END VIDEO SECTION ================ -->

<!-- =============== START GALLERY SECTION ================ -->
<section id="photos" class="photoHome padding gallerySection" id="content">
    <div class="container" style="padding:0;">
        <div class="row">
            <div class="sectionTitle">
                <span class="heading-t3"></span>
                <h2><a href="">PHOTO GALLERY</a></h2>
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
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_11122016/cover.jpg" alt="">        
                                        </div>
                                    </figcaption>
                                    <div class="album-title">
                                        11/12/2016
                                    </div>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                11/12/2016
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evSubtitle"> 
                                                <a href="{{ route("album", ["album" => "11122016"]) }}" class="info"> view album </a>
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
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_10122016/cover.jpg" alt="">
                                        </div>
                                    </figcaption>
                                    <div class="album-title">
                                        10/12/2016
                                    </div>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                10/12/2016
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evSubtitle"> 
                                                <a href="{{ route("album", ["album" => "10122016"]) }}" class="info"> view album </a>
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
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_09122016/cover.jpg" alt="">
                                        </div>
                                    </figcaption>
                                    <div class="album-title">
                                        09/12/2016
                                    </div>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                09/12/2016
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evSubtitle"> 
                                                <a href="{{ route("album", ["album" => "09122016"]) }}" class="info"> view album </a>
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
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_08122016/cover.jpg" alt="">
                                        </div>
                                    </figcaption>
                                    <div class="album-title">
                                        08/12/2016
                                    </div>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                08/12/2016
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evSubtitle"> 
                                                <a href="{{ route("album", ["album" => "08122016"]) }}" class="info"> view album </a>
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
                                        <div class="hovereffect" id="interior">
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_interior/cover.jpg" alt="">
                                        </div>
                                    </figcaption>
                                    <div class="album-title">
                                        interior
                                    </div>
                                    <div class="content">
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
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_04122016/cover.jpg" alt="">
                                        </div>
                                    </figcaption>
                                    <div class="album-title">
                                        04/12/2016
                                    </div>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                04/12/2016
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evSubtitle"> 
                                                <a href="{{ route("album", ["album" => "04122016"]) }}" class="info"> view album </a>
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
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_03122016/cover.jpg" alt="">
                                        </div>
                                    </figcaption>
                                    <div class="album-title">
                                        03/12/2016
                                    </div>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                03/12/2016
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evSubtitle"> 
                                                <a href="{{ route("album", ["album" => "03122016"]) }}" class="info"> view album </a>
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
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_02122016/cover.jpg" alt="">
                                        </div>
                                    </figcaption>
                                    <div class="album-title">
                                        02/12/2016
                                    </div>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                02/12/2016
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evSubtitle"> 
                                                <a href="{{ route("album", ["album" => "02122016"]) }}" class="info"> view album </a>
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
                                            <img class="img-responsive" src="<?php echo url("") ?>/images/albums/album_01122016/cover.jpg" alt="">
                                        </div>
                                    </figcaption>
                                    <div class="album-title">
                                        01/12/2016
                                    </div>
                                    <div class="content">
                                        <div class="eventHover">
                                            <div class="event">
                                                01/12/2016
                                            </div>
                                            <div class="fixLine"></div>
                                            <div  class="evSubtitle"> 
                                                <a href="{{ route("album", ["album" => "01122016"]) }}" class="info"> view album </a>
                                            </div>
                                        </div>
                                    </div>                                    
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =============== END GALLERY SECTION ================ -->

<!-- =============== START ALBUM COVER SECTION ================ -->
<section id="ourDJ" class="padding albumsHome hide-section background-properties">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sectionTitle paddingBottom">
                    <span class="heading-t3"></span>
                    <h2><a href="#">OUR DJs</a></h2>
                    <span class="heading-b3"></span>
                </div>
            </div>
        </div>
        <div class="list-albums">
            <ul class="list-feature col-md-12 col-xs-12 col-sm-12">
                <li class="col-md-3 col-sm-3 col-xs-12">
                    <div class="album-icon">
                        <span class="thumbs-album">
                            <a href="#"><img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj1.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
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
                            <a href="#"><img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj2.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
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
                            <a href="#"><img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj3.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
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
                            <a href="#"><img width="270" height="270" src="<?php echo url("") ?>/images/djs/dj4.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
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

<!-- =============== START HOME-BLOG SECTION ================ -->	
<section id="news" class="padding hide-section background-properties blogHomeSection" style="background-image:url(<?php echo url("") ?>/images/bgcontact.png);">	
    <div class="container">
        <div class="row">
            <div class="sectionTitle paddingBottom">
                <span class="heading-t3"></span>
                <h2><a href="">News from the Club</a></h2>
                <span class="heading-b3"></span>
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
                    <div class="videoBox"><iframe src="https://www.youtube.com/embed/MptSRokgwhg" width="600" height="410"  ></iframe></div>
                    <div class="blogBoxContent">
                        <div class="blogHeader">
                            <h1><a href="#">Tamara Djuric in Square</a></h1>
                        </div>
                        <div class="admin-list clearfix">
                            <ul>
                                <li><a href="#">28 Nov 2016</a>&nbsp;&nbsp;</li>
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
                    <div class="soundcloudBox"><iframe height="203" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/120185136&amp;color=bb9b69&amp;show_artwork=false&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false"></iframe></div>
                    <div class="blogBoxContent">
                        <div class="blogHeader">
                            <h1><a href="#">Our DJ Prema published a new track</a></h1>
                        </div>
                        <div class="admin-list clearfix">
                            <ul>
                                <li><a href="#">03 Nov 2016</a>&nbsp;&nbsp;</li>
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
        </div>	
    </div>	
</section>
<!-- =============== END HOME-NLOG SECTION ================ -->	

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