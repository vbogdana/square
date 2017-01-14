
@extends('layouts.master')

@section('meta')

        <meta property="fb:pages" content="squareclubbelgrade">

        <meta name="description" content="Here you can read latest news from our club! Club Square is among the best places to go out when it comes to winter Belgrade night clubs! Club Square is in the beautiful area of the city, at address Studentski trg 15, near the luxury hotel Square Nine. It's luxurious and elegant ambiance, as well as modern lighting and lighting effects.">

        <meta property="og:locale" content="en_US">

        <meta property="og:type" content="website">

        <meta property="og:url" content="http://squareclubbelgrade.com/news">

        <meta property="og:title"              content="Club Square Belgrade - News From the Club" />

        <meta property="og:description"        content="Here you can read latest news from our club! Club Square is among the best places to go out when it comes to winter Belgrade night clubs! Club Square is in the beautiful area of the city, at address Studentski trg 15, near the luxury hotel Square Nine. It's luxurious and elegant ambiance, as well as modern lighting and lighting effects." />

        <meta property="og:site_name" content="Square Club Belgrade">
        
        <meta property="og:image" content="<?php echo url("") ?>/images/bgnocu1.jpg"/>

@stop

@section('scripts')

@stop

@section('breadcrumb')
<!-- =============== START BREADCRUMB ================ -->
<section class="no-mb">
    <div class="row">
        <div class="col-sm-12">
            <div class="before-FullscreenSlider"></div>
            <div class="breadcrumb-fullscreen-parent phone-menu-bg">
                <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image:url(<?php echo url("") ?>/images/bgnocu.jpg);" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                    <div class="breadTxt breadSingle">
                        <h2> NEWS FROM THE CLUB </h2>
                        <p> Here are the latest news from our club!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =============== END BREADCRUMB ================ -->
@stop

@section('content')
<!-- =============== START BLOG SIDEBAR-RIGHT ================ -->
<section class="blogSidebarRight padding" id="content">
    <div class="container">
        <div class="row">
            
            <div class="blog-sidebar-right">
                <div class="col-sm-8 page" id="1">
                    <div class="blogBox">	
                        <div class="owl-carousel">
                            <div class="item"><img src="<?php echo url("") ?>/images/events/saturday.png" alt=""></div>
                        </div>	
                        <div class="blogBoxContent">
                            <div class="blogHeader">
                                <h1><a href="{{ route("blog", ["blog_id" => "Roby-Rob-in-Square-this-Saturday"]) }}">Roby Rob in Square this Saturday</a></h1>
                            </div>
                            <div class="admin-list clearfix">
                                <ul>
                                    <li><a href="{{ route("blog", ["blog_id" => "Roby-Rob-in-Square-this-Saturday"]) }}">14 Jan 2017</a>&nbsp;/&nbsp;</li>
                                    <li><a href="{{ route("news") }}">News</a>&nbsp;/&nbsp;</li>
                                    <li><a href="{{ route("/") }}#events">Event</a>&nbsp;/&nbsp;</li>
                                    <li><a href="{{ route("blog", ["blog_id" => "Roby-Rob-in-Square-this-Saturday"]) }}">Roby Rob</a>&nbsp;/&nbsp;</li>
                                </ul>
                            </div>
                            <div class="blogParagraph">
                                <p>World DJ star from Switzerland in new Belgrade club this weekend! Great Swiss DJ and MC, producer, musician and composer, one of the most famous Swiss House and R & B - Hip-Hop artist performs this Saturday in Belgrade!</p>
                            </div><!--end blogParagraph  -->
                            <div class="rmButton">
                                <a href="{{ route("blog", ["blog_id" => "Roby-Rob-in-Square-this-Saturday"]) }}">Read More</a>
                            </div>			
                        </div><!-- end blogBoxContent -->
                    </div><!-- end blogBox -->
                    <!--
                    <div class="blogBox">	
                        <iframe src="https://player.vimeo.com/video/73340128" width="500" height="281"   ></iframe>
                        <div class="blogBoxContent">
                            <div class="blogHeader">
                                <h1><a href="blogSingle.html">VIdeo Post</a></h1>
                            </div>
                            <div class="admin-list clearfix">
                                <ul>
                                    <li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">By Admin</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">Categories</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">Gallery</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="blogParagraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic nam voluptatem mollitia doloribus! Tempora neque pariatur saepe error esse soluta repellat laboriosam aperiam qui accusantium placeat, aspernatur maxime, magnam id veritatis quas obcaecati architecto laborum! Odio illum aperiam beatae earum dicta.</p>
                            </div>
                            <div class="rmButton">
                                <a href="blogSingle.html">Read More</a>
                            </div>			
                        </div>
                    </div>
                    <div class="blogBox">	
                        <iframe width="100" height="53"  src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/156842497&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        <div class="blogBoxContent">
                            <div class="blogHeader">
                                <h1><a href="blogSingle.html">Soundcloud Post</a></h1>
                            </div>
                            <div class="admin-list clearfix">
                                <ul>
                                    <li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">By Admin</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">Categories</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">Gallery</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="blogParagraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic nam voluptatem mollitia doloribus! Tempora neque pariatur saepe error esse soluta repellat laboriosam aperiam qui accusantium placeat, aspernatur maxime, magnam id veritatis quas obcaecati architecto laborum! Odio illum aperiam beatae earum dicta.</p>
                            </div>
                            <div class="rmButton">
                                <a href="blogSingle.html">Read More</a>
                            </div>			
                        </div>
                    </div>
                    <div class="blogBox">	
                        <div class="blogBoxContent">
                            <div class="blogHeader">
                                <h1><a href="blogSingle.html">Standard Post</a></h1>
                            </div>
                            <div class="admin-list clearfix">
                                <ul>
                                    <li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">By Admin</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">Categories</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">Gallery</a>&nbsp;/&nbsp;</li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="blogParagraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic nam voluptatem mollitia doloribus! Tempora neque pariatur saepe error esse soluta repellat laboriosam aperiam qui accusantium placeat, aspernatur maxime, magnam id veritatis quas obcaecati architecto laborum! Odio illum aperiam beatae earum dicta.</p>
                            </div>
                            <div class="rmButton">
                                <a href="blogSingle.html">Read More</a>
                            </div>			
                        </div>                      
                    </div>
                    -->
                </div><!-- end col-sm-8 -->                                
            </div><!-- end blog-left -->
            <div class="blog-right">
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="blogSidebar">
                        <div class="widget">
                            <div class="previous">Previous page</div>
                            -
                            <div class="next">Next page</div>    
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul>
                                <li><a href="{{ route("blog", ["blog_id" => "Roby-Rob-in-Square-this-Saturday"]) }}">- Roby Rob in Square this Saturday</a></li>
                            </ul>
                        </div><!-- end widget -->
                        <div class="widget next-events">
                            <h3 class="widget-title">Next Events</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="<?php echo url("/") ?>/images/events/thursday.png">
                                </div>
                                <div class="col-sm-12">
                                    <img src="<?php echo url("/") ?>/images/events/friday.png">
                                </div>
                                <div class="col-sm-12">
                                    <img src="<?php echo url("/") ?>/images/events/saturday.png">
                                </div>
                                <div class="col-sm-12">
                                    <img src="<?php echo url("/") ?>/images/events/sunday.png">
                                </div>
                            </div>
                        </div><!-- end widget -->
                        <div class="widget">
                            <h3>Instagram</h3>
                            <div class="instagram-widget">
                                <!-- SnapWidget -->
                                <script src="https://snapwidget.com/js/snapwidget.js"></script>
                                <iframe src="https://snapwidget.com/embed/301262" class="snapwidget-widget" allowTransparency="true" frameborder="0" 
                                        scrolling="no" style="border:none; overflow:hidden; width:100%; ">
                                </iframe>
                            </div>
                        </div><!-- end widget -->
                    </div><!-- end blogSidebar -->
                </div><!-- end col-sm03 -->
            </div><!-- end blog-right -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- =============== END BLOG SIDEBAR-RIGHT ================ -->
@stop