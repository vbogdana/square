
@extends('layouts.master')

@section('scripts')

@stop

@section('content')
<!-- =============== START BIOGRAPHY SECTION ================ -->
<section style="background-image:url(assets/img/subHeader/header.png);" class="biography padding background-properties hide-section" id="content">
    <div class="container">
        <div class="sectionTitle paddingBottom">
            <span class="heading-t3"></span>
            <h2><a href="albums.html">About Us</a></h2>
            <span class="heading-b3"></span>
        </div><!-- end sectionTtile -->
        <div class="row">
            <div class="col-sm-6">
                <p>Emi Haze graduated from the Institute
                    of Design in Verona with
                    a degree in Graphic Design
                    and Advertising Design.I live in the north-east of Italy and my huge passion is digital art.
                    Art and painting connected to technology have always been my strongest passions. People think I am calm, quiet, sometimes introvert, really creative, inspired and perfectionist.
                    In my opinion everything in every moment has an artistic side, the aesthetics of things, people around me...
                    for me everything has its own importance, images, textures, sounds, fragrances, my creativity is costantly stimulated.</p>


            </div>
            <div class="col-sm-6">
                <p>I currently work as freelance and in the last years I focused on personal projects and creations in order to build,
                    my own wide portfolio that could distinguish me both in style, technique and creativity.
                    In my first works i focused on a graphic style based on construction and deconstruction of the human body
                    using various tools and graphic effects that render it almost a sketch.
                </p>

                <div class="signature">
                    <a href="#">Club Square Belgrade</a>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section>
<!-- =============== END BIOGRAPHY SECTION ================ -->
	
<!-- =============== START EVENTS SECTION ================ -->
<section class="shopHomePage shopHomePadding hide-section">
    <div class="shopSection">
        <div class="container-fluid">
            <div class="shopContent">
                <div class="sectionTitle paddingBottom">
                    <span class="heading-t3"></span>
                    <h2><a href="shop.html">EVENTS</a></h2>
                    <span class="heading-b3"></span>
                </div><!-- end sectionTtile -->	
                <div class="row">
                    <nav class="shop-products">
                        <ul class="clearfix">
                            <li class="col-sm-3">
                                <figure>
                                    <figcaption>
                                        <img src="assets/img/shop/shopProduct.png" alt="">
                                    </figcaption>
                                    <div class="content">
                                        <div class="shopHover">
                                            <div class="price">
                                                &pound; 15,99
                                            </div>
                                            <div  class="proTitle">
                                                <a href="shopSingle.html">Original T. Brothers</a>
                                            </div>
                                            <div class="product">Hoodie Aqura</div>
                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
                                        </div>
                                    </div>
                                </figure>
                            </li>
                            <li class="col-sm-3">
                                <figure>
                                    <figcaption>
                                        <img src="assets/img/shop/shopProduct.png" alt="">
                                    </figcaption>
                                    <div class="content">
                                        <div class="shopHover">
                                            <div class="price">
                                                &pound; 15,99
                                            </div>
                                            <div  class="proTitle">
                                                <a href="shopSingle.html">Original T. Brothers</a>
                                            </div>
                                            <div class="product">Hoodie Aqura</div>
                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
                                        </div>
                                    </div>
                                </figure>
                            </li>
                            <li class="col-sm-3">
                                <figure>
                                    <figcaption>
                                        <img src="assets/img/shop/shopProduct.png" alt="">
                                    </figcaption>
                                    <div class="content">
                                        <div class="shopHover">
                                            <div class="price">
                                                &pound; 15,99
                                            </div>
                                            <div  class="proTitle">
                                                <a href="shopSingle.html">Original T. Brothers</a>
                                            </div>
                                            <div class="product">Hoodie Aqura</div>
                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
                                        </div>
                                    </div>
                                </figure>
                            </li>
                            <li class="col-sm-3">
                                <figure>
                                    <figcaption>
                                        <img src="assets/img/shop/shopProduct.png" alt="">
                                    </figcaption>
                                    <div class="content">
                                        <div class="shopHover">
                                            <div class="price">
                                                &pound; 15,99
                                            </div>
                                            <div  class="proTitle">
                                                <a href="shopSingle.html">Original T. Brothers</a>
                                            </div>
                                            <div class="product">Hoodie Aqura</div>
                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
                                            <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
                                        </div>
                                    </div>
                                </figure>
                            </li>
                        </ul>
                    </nav><!-- end shop-products -->
                </div><!-- end row -->
            </div><!-- end shopContent -->
        </div>
    </div>
</section>
<!-- =============== END EVENTS SECTION ================ -->
	

<!-- =============== START EVENTS SECTION-2 ================ -->
<section class="padding hide-section countdownSection background-properties" style="background-image: url(assets/img/events/countdownHome.png);">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="countdownTitle">
                    <h4>Next Event</h4>
                    <a href="singleEvent.html"><img src="assets/img/events/box.png" alt="Event"></a>
                </div>
                <div class="sm-countdown sm_content_element sm-style2" id="sm_countdown-19" data-date="2016/10/23">
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
                </div><!-- end sm-countdown -->
            </div>
        </div>
    </div>
</section>
<!-- =============== END EVENTS SECTION-2 ================ -->

<!-- =============== START VIDEO SECTION ================ -->
<section class="videoHome hide-section padding">
    <div class="container">
        <div class="row">
            <div class="sectionTitle">
                <span class="heading-t3"></span>
                <h2><a href="video.html">Upload Video</a></h2>
                <span class="heading-b3"></span>
                <p>Check out my latest videos and follow me on <a href="#">Youtube</a> & <a href="#">Vimeo</a> to view more.</p>
            </div><!-- end sectionTtile -->
            <div class="col-sm-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VV-Q-aRHTDE"  allowfullscreen></iframe>
            </div><!-- end col-sm-4 -->
            <div class="col-sm-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VxG5C4q_rEs"  allowfullscreen></iframe>
            </div><!-- end col-sm-4 -->
            <div class="col-sm-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OkbuRa1o1wA"  allowfullscreen></iframe>
            </div><!-- end col-sm-4 -->
        </div>
    </div>
</section>
<!-- =============== END VIDEO SECTION ================ -->

<!-- =============== START GALLERY SECTION ================ -->
<section style="padding-bottom:0; padding-top:0;" class="hide-section">
    <div class="gallerySection">
        <div class="container-fluid" style="padding:0;">
            <div class="col-sm-12">
                <!-- Content Container -->
                <div class="content-container clearfix">
                    <!-- Single Album Container -->
                    <div class="single-photo-album-container">
                        <div class="row">
                            <!-- Single Album Article -->
                            <article class="col-sm-12 col-md-6 col-xs-12">
                                <!-- Single Album Contant Container -->
                                <figure>
                                    <!-- Single Album Image -->
                                    <figcaption>
                                        <!-- Single Album Image -->
                                        <div class="hovereffect">
                                            <img class="img-responsive" src="assets/img/gallery/wideGal.png" alt="">
                                            <div class="overlay">
                                                <a class="info lightbox" href="assets/img/gallery/wideGal.png"></a>
                                            </div>
                                        </div>
                                    </figcaption>
                                    <!-- Single Album View Button -->

                                </figure>
                            </article>
                            <!-- Single Album Article -->
                            <article class="col-sm-3 col-xs-6">
                                <!-- Single Album Contant Container -->
                                <figure>
                                    <!-- Single Album Image -->
                                    <figcaption>
                                        <div class="hovereffect">
                                            <img class="img-responsive" src="assets/img/gallery/squareGal.png" alt="">
                                            <div class="overlay">
                                                <a class="info lightbox" href="assets/img/gallery/wideGal.png"></a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <!-- Single Album Article -->
                            <article class="col-sm-3 col-xs-6">
                                <!-- Single Album Contant Container -->
                                <figure>
                                    <!-- Single Album Image -->
                                    <figcaption>
                                        <div class="hovereffect">
                                            <img class="img-responsive" src="assets/img/gallery/squareGal.png" alt="">
                                            <div class="overlay">
                                                <a class="info lightbox" href="assets/img/gallery/wideGal.png"></a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <!-- Single Album Article -->
                            <article class="col-sm-3 col-xs-6">
                                <!-- Single Album Contant Container -->
                                <figure>
                                    <!-- Single Album Image -->
                                    <figcaption>
                                        <div class="hovereffect">
                                            <img class="img-responsive" src="assets/img/gallery/squareGal.png" alt="">
                                            <div class="overlay">
                                                <a class="info lightbox" href="assets/img/gallery/wideGal.png"></a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <!-- Single Album Article -->
                            <article class="col-sm-3 col-xs-6">
                                <!-- Single Album Contant Container -->
                                <figure>
                                    <!-- Single Album Image -->
                                    <figcaption>
                                        <div class="hovereffect">
                                            <img class="img-responsive" src="assets/img/gallery/squareGal.png" alt="">
                                            <div class="overlay">
                                                <a class="info lightbox" href="assets/img/gallery/wideGal.png"></a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <!-- Single Album Article -->
                            <article class="col-sm-12 col-md-6 col-xs-12">
                                <!-- Single Album Contant Container -->
                                <figure>
                                    <!-- Single Album Image -->
                                    <figcaption>
                                        <div class="hovereffect">
                                            <img class="img-responsive" src="assets/img/gallery/wideGal.png" alt="">
                                            <div class="overlay">
                                                <a class="info lightbox" href="assets/img/gallery/wideGal.png"></a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>								
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div>
</section>
<!-- =============== END GALLERY SECTION ================ -->


<!-- =============== START ALBUM COVER SECTION ================ -->
<section class="padding albumsHome hide-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sectionTitle paddingBottom">
                    <span class="heading-t3"></span>
                    <h2><a href="albumsFullBackground.html">OUR DJ`s</a></h2>
                    <span class="heading-b3"></span>
                </div><!-- end sectionTtile -->
            </div><!-- end col-sm-12 -->
        </div>
        <div class="list-albums">
            <ul class="list-feature col-md-12 col-xs-12 col-sm-12">
                <li class="col-md-3 col-sm-3 col-xs-12">
                    <div class="album-icon">
                        <span class="thumbs-album">
                            <a href="albumsSingle1.html"><img width="270" height="270" src="assets/img/albums/albumCover.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
                        </span>
                        <span class="disk"></span>
                    </div><!-- END ALBUM ICON -->
                    <div class="name">
                        <h3>Noon Xoxo</h3>						
                        <p>Chillout</p>								
                    </div><!-- end name -->
                </li>

                <li class="col-md-3 col-sm-3 col-xs-12">
                    <div class="album-icon albumIcon1">
                        <span class="thumbs-album">
                            <a href="albumsSingle3.html"><img width="270" height="270" src="assets/img/albums/albumCover.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
                        </span>
                        <span class="disk"></span>
                    </div>
                    <div class="name">
                        <h3>Stunt Vibe</h3>									<p>Chillout</p>								
                    </div>
                </li>
                <li class="col-md-3 col-sm-3 col-xs-12">
                    <div class="album-icon albumIcon2">
                        <span class="thumbs-album">
                            <a href="albumsSingle4.html"><img width="270" height="270" src="assets/img/albums/albumCover.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
                        </span>
                        <span class="disk"></span>
                    </div>
                    <div class="name">
                        <h3>Strange Clouds</h3>								<p>Chillout</p>								
                    </div>
                </li>
                <li class="col-md-3 col-sm-3 col-xs-12">
                    <div class="album-icon albumIcon3">
                        <span class="thumbs-album">
                            <a href="albumsSingle2.html"><img width="270" height="270" src="assets/img/albums/albumCover.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
                        </span>
                        <span class="disk"></span>
                    </div>
                    <div class="name">
                        <h3>Natural Earth</h3>								<p>Chillout</p>								
                    </div>
                </li>	
            </ul>
        </div><!-- end list-albums -->
    </div><!-- end container -->
</section>
<!-- =============== END ALBUM COVER SECTION ================ -->

<!-- =============== START HOME-BLOG SECTION ================ -->	
<section class="padding hide-section background-properties blogHomeSection" style="background-image: url(assets/img/blog/homeBlog.png);">	
    <div class="container">
        <div class="row">
            <div class="sectionTitle paddingBottom">
                <span class="heading-t3"></span>
                <h2><a href="blogGrid.html">News</a></h2>
                <span class="heading-b3"></span>
            </div><!-- end sectionTtile -->
            <div class="col-sm-4">
                <div class="blogBox">	
                    <div class="imgBox"><img src="assets/img/blog/homeGalPost.png" alt="box-img"></div>
                    <div class="blogBoxContent">
                        <div class="blogHeader">
                            <h1><a href="blogSingle.html">Gallery Post</a></h1>
                        </div>
                        <div class="admin-list clearfix">
                            <ul>
                                <li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">By Admin</a></li>
                            </ul>
                        </div><!-- end admin-list -->
                        <div class="blogParagraph">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div><!--end blogParagraph  -->
                        <div class="rmButton">
                            <a href="#">Read More</a>
                        </div>			
                    </div><!-- end blogBoxContent -->
                </div><!-- end blogBox -->
            </div><!-- end col-sm-4 -->	
            <div class="col-sm-4">
                <div class="blogBox">	
                    <div class="videoBox"><iframe src="https://player.vimeo.com/video/145837856" width="600" height="410"  ></iframe></div>
                    <div class="blogBoxContent">
                        <div class="blogHeader">
                            <h1><a href="blogSingle.html">Video Post</a></h1>
                        </div>
                        <div class="admin-list clearfix">
                            <ul>
                                <li><a href="#">28 apr 2016</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">By Admin</a></li>
                            </ul>
                        </div><!-- end admin-list -->
                        <div class="blogParagraph">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div><!--end blogParagraph  -->
                        <div class="rmButton">
                            <a href="#">Read More</a>
                        </div>			
                    </div><!-- end blogBoxContent -->
                </div><!-- end blogBox -->
            </div><!-- end col-sm-4 -->	
            <div class="col-sm-4">
                <div class="blogBox">	
                    <div class="soundcloudBox"><iframe height="203" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/73595878&amp;color=bb9b69&amp;show_artwork=false&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false"></iframe></div>
                    <div class="blogBoxContent">
                        <div class="blogHeader">
                            <h1><a href="blogSingle.html">Soundcloud Post</a></h1>
                        </div>
                        <div class="admin-list clearfix">
                            <ul>
                                <li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">By Admin</a></li>
                            </ul>
                        </div><!-- end admin-list -->
                        <div class="blogParagraph">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div><!--end blogParagraph  -->
                        <div class="rmButton">
                            <a href="#">Read More</a>
                        </div>			
                    </div><!-- end blogBoxContent -->
                </div><!-- end blogBox -->
            </div><!-- end col-sm-4 -->	
        </div><!-- end container -->	
    </div><!-- end row -->	
</section>
<!-- =============== END HOME-NLOG SECTION ================ -->	

<!-- =============== START CONTACT ================ -->
<section class="contactSingle padding background-properties" id="content" style="background-image:url(assets/img/subHeader/header.png);">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="contactTop">
                    <h2>Contact Information</h2>
                    <h4>198 West 21th Street, Suite 721, New York, NY 10010.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer odio. <br>
                        Quisque volutpat mattis eros. Nullam turpis.
                    </p>
                    <div class="contactInfo">
                        <ul>
                            <li>Email: <a href="#">info@themebrothers.com</a></li>
                            <li>Phone: <a href="#">+4070 547 235 125</a></li>
                            <li>Fax: <a href="#">+4070 125 949 678</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- end col-sm-4 -->
            <div class="col-sm-7 col-sm-offset-1">
                <div class="singleBlogForm">
                    <h2>Get in Touch</h2>
                    <form action="#" method="post" class="comment-form">
                        <input id="author" name="author" type="text" value="" aria-required="true" required="" placeholder="First Name *">
                        <input id="lastName" name="email" type="text" value="" aria-required="true" required="" placeholder="Last Name">
                        <input id="url" name="url" type="text" value="" placeholder="Subject* ">
                        <input id="address" name="url" type="text" value="" placeholder="Email Address* ">
                        <textarea name="comment" placeholder="Message..." rows="6" required=""></textarea>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" value="Send Email">
                        </p>
                    </form>
                </div><!-- end contactForm -->
            </div><!-- end col-sm-7 col-sm-offset-1 -->
        </div>
    </div><!-- end container -->
</section>
<!-- =============== END CONTACT ================ -->

<!-- =============== START MAP ================ -->
<section class="googleMap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="map-canvas" class="google-map" data-lat="44.820092" data-long="20.456819" data-img="<?php echo url("") ?>/images/location.svg"></div>
            </div>
        </div>
    </div>

</section>
<!-- =============== END MAP ================ -->

@stop