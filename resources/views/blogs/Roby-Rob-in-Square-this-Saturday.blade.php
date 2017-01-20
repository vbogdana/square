
@extends('layouts.master')

@section('meta')

        <meta property="fb:pages" content="squareclubbelgrade">

        <meta name="description" content="World DJ star from Switzerland in new Belgrade club this weekend! Great Swiss DJ and MC, producer, musician and composer, one of the most famous Swiss..."/>

        <meta property="og:locale" content="en_US"/>

        <meta property="og:type" content="website"/>

        <meta property="og:url" content="http://squareclubbelgrade.com/news/Roby-Rob-in-Square-this-Saturday"/>

        <meta property="og:title" content="Club Square Belgrade - Roby Rob in Square this Saturday" />

        <meta property="og:description" content="World DJ star from Switzerland in new Belgrade club this weekend! Great Swiss DJ and MC, producer, musician and composer, one of the most famous Swiss..." />

        <meta property="og:site_name" content="Square Club Belgrade"/>
        
        <meta property="og:image" content="<?php echo url("") ?>/images/blog/roby-rob4.png"/>

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
                <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image:url(<?php echo url("") ?>/images/blog/roby-rob3.png);" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                    <div class="breadTxt breadSingle">
                        <h2> Roby Rob in Square this Saturday </h2>
                        <p>World DJ star from Switzerland in new Belgrade club this weekend!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =============== END BREADCRUMB ================ -->
@stop

@section('content')
<!-- =============== START BLOG SINGLE ================ -->
<section class="blogSingle padding" id="content">
    <div class="container">
        <div class="row">
            <div class="blog-left">
                <div class="col-sm-8">
                    <div class="owl-carousel">
                        <div class="item"><img src="<?php echo url("/") ?>/images/blog/roby-rob4.png" alt=""></div>
                    </div>
                    <div class="admin-list clearfix">
                        <ul>
                            <li><a href="{{ route("blog", ["blog_id" => "Roby-Rob-in-Square-this-Saturday"]) }}">14 Jan 2017</a>&nbsp;/&nbsp;</li>
                            <li><a href="{{ route("news") }}">News</a>&nbsp;/&nbsp;</li>
                            <li><a href="{{ route("/") }}#events">Event</a>&nbsp;/&nbsp;</li>
                            <li><a href="{{ route("blog", ["blog_id" => "Roby-Rob-in-Square-this-Saturday"]) }}">Roby Rob</a>&nbsp;/&nbsp;</li>
                        </ul>
                    </div>
                    <div class="title">
                        <h2>Roby Rob in Square this Saturday</h2>
                    </div>
                    <div class="paragraph">
                        <p>
                            Great Swiss DJ and MC, producer, musician and composer, one of the most famous Swiss House and R & B - Hip-Hop artist performs this Saturday in Belgrade!
                        </p>
                        <p>
                            Roby Rob has over 20 years of success on the world stage.
                            <br /><br />
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/bRG26Tfdw_Q" frameborder="0" allowfullscreen></iframe>
                        </p>
                        <p>
                            Globally known for its cooperation with the mega popular DJ Antoine with whom he released more than 35 tracks that have been sold in more than 3 million copies in 72 countries. With Antoine he had more than 1500 events around the world at various festivals, events, parties.
                            <br/><br/>
                            <img src="<?php echo url("/") ?>/images/blog/roby-rob2.png">                       
                        </p>
                        <p>
                            In 2013. big hit was his new music video “Kymnotize 2013”, which he did with USA Hip-Hop star Lil 'Kim for the label Syrup music.
                            <br/><br/>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/PB_MFyNw_-c" frameborder="0" allowfullscreen></iframe>
                        </p>
                        <p>
                            For the same label he released the fantastic track called To the Dancefloor with Serbian producers The Beatshakers
                            <br/><br/>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/zk3t4-gEeDk" frameborder="0" allowfullscreen></iframe>
                        </p>
                        <p>
                            He has performed at the Sambadrome in Brazil and on Street Parade in Zurich in front of 1,000,000 people, as well as at various events in Austria, Italy, Germany, Switzerland, USA, Russia, Brazil, Asia, South America.
                            <br/><br/>
                            <img src="<?php echo url("/") ?>/images/blog/roby-rob3.png"> 
                        </p>
                        <p>
                            This Saturday, the Belgrade public will be able to enjoy its authentic appearance in the club Square, new modern club in Studentski trg street.
                            <br/><br/>
                            <img src="<?php echo url("/") ?>/images/blog/roby-rob1.jpg"> 
                        </p>
                    </div>
                    
                    <div class="author-info">
                        <div class="fb-comments" data-href="https://www.facebook.com/SquareClubBelgrade/posts/1699958606961247" data-numposts="5" data-mobile="true"></div>
                    </div> 
                    
                </div>
            </div><!-- end blog-left -->
            <div class="blog-right">
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="blogSidebar">
                        <div class="widget">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul>
                                <li><a href="{{ route("blog", ["blog_id" => "Roby-Rob-in-Square-this-Saturday"]) }}"> - Roby Rob in Square this Saturday</a></li>
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
<!-- =============== END BLOG SINGLE ================ -->
@stop