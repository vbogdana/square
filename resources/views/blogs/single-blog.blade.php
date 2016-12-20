
@extends('layouts.master')

@section('scripts')

@stop

@section('breadcrumb')
<!-- =============== START BREADCRUMB ================ -->
<section class="no-mb">
    <div class="row">
        <div class="col-sm-12">
            <div class="before-FullscreenSlider"></div>
            <div class="breadcrumb-fullscreen-parent phone-menu-bg">
                <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-color: #0a0a0a" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
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
<!-- =============== START BLOG SINGLE ================ -->
<section class="blogSingle padding" id="content">
    <div class="container">
        <div class="row">
            <div class="blog-left">
                <div class="col-sm-8">
                    <div class="owl-carousel">
                        <div class="item"><img src="assets/img/blog/galPost.png" alt=""></div>
                        <div class="item"><img src="assets/img/blog/galPost.png" alt=""></div>
                    </div>
                    <div class="admin-list clearfix">
                        <ul>
                            <li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
                            <li><a href="#">Autor posta</a>&nbsp;/&nbsp;</li>
                            <li><a href="#">Category</a>&nbsp;/&nbsp;</li>
                            <li><a href="#">Koja kategorija</a>&nbsp;/&nbsp;</li>
                        </ul>
                    </div>
                    <div class="title">
                        <h2>About Last Night</h2>
                    </div>
                    <div class="paragraph">
                        <p>Chillwave forage Echo Park butcher banh mi, street art cred locavore kale chips. Before they sold out YOLO street art drinking vinegar, umami hella XOXO Terry Richardson lomo craft beer Tumblr tousled jean shorts tofu squid. Selvage Vice gastropub Tonx Thundercats four loko. Selfies before they sold out ethical shabby chic raw denim. Vice DIY Marfa Echo Park, paleo Terry Richardson post-ironic salvia. Mustache occupy hoodie, letterpress irony cliche food truck seitan four loko. Occupy flexitarian meh cred, tousled Austin kale chips jean shorts shabby chic Echo Park narwhal artisan Wes Anderson fap.</p>
                        <p>Chillwave forage Echo Park butcher banh mi, street art cred locavore kale chips. Before they sold out YOLO street art drinking vinegar, umami hella XOXO Terry Richardson lomo craft beer Tumblr tousled jean shorts tofu squid. Selvage Vice gastropub Tonx Thundercats four loko. Selfies before they sold out ethical shabby chic raw denim. Vice DIY Marfa Echo Park, paleo Terry Richardson post-ironic salvia. Mustache occupy hoodie, letterpress irony cliche food truck seitan four loko. Occupy flexitarian meh cred, tousled Austin kale chips jean shorts shabby chic Echo Park narwhal artisan Wes Anderson fap.</p>
                        <p>Chillwave forage Echo Park butcher banh mi, street art cred locavore kale chips. Before they sold out YOLO street art drinking vinegar, umami hella XOXO Terry Richardson lomo craft beer Tumblr tousled jean shorts tofu squid. Selvage Vice gastropub Tonx Thundercats four loko. Selfies before they sold out ethical shabby chic raw denim. Vice DIY Marfa Echo Park, paleo Terry Richardson post-ironic salvia. Mustache occupy hoodie, letterpress irony cliche food truck seitan four loko. Occupy flexitarian meh cred, tousled Austin kale chips jean shorts shabby chic Echo Park narwhal artisan Wes Anderson fap.</p>
                    </div>
                    <div class="tagBlogSingle">
                        <div class="content">
                            <p>Tag Cloud:</p>
                            <a href="#">lista</a>&nbsp;/&nbsp;
                            <a href="#">kljucnih</a>&nbsp;/&nbsp;
                            <a href="#">reci</a>&nbsp;/&nbsp;
                            <a href="#">Music</a>&nbsp;/&nbsp;
                            <a href="#">Dj</a>
                        </div>
                    </div>

                    <div class="author-info">
                        <div class="left-author-info">
                            <figure>
                                <img src="assets/img/blog/blg1.png" alt="">
                            </figure>
                        </div>
                        <div class="right-author-info">
                            <h1>
                                By Admin
                            </h1>
                            <p>Literally slow-carb umami, mixtape bicycle rights salvia skateboard. Selfies squid normcore chillwave, slow-carb cred Austin small batch leggings umami cliche trust fund Echo.</p>
                        </div>
                    </div>
                    
                    <div class="author-info">
                        <!--
                        <div class="fb-comment-embed" data-href="https://www.facebook.com/zuck/posts/10102577175875681?comment_id=1193531464007751&amp;reply_comment_id=654912701278942" data-width="560" data-include-parent="true"></div>
                    ````EMBED FB COMMENT
                        -->
                    </div>                        
                </div><!-- end col-sm-8 -->
            </div><!-- end blog-left -->
            <div class="blog-right">
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="blogSidebar">
                        <div class="widget">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul>
                                <li><a href="#">About Last Night</a></li>
                                <li><a href="#">Video Post</a></li>
                                <li><a href="#">Soundcloud</a></li>
                                <li><a href="#">Post With Audio Tracks</a></li>
                                <li><a href="#">Soundcloud Post</a></li>
                                <li><a href="#">Standard Post</a></li>
                            </ul>
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
                        <div class="widget tagCloud">
                            <h3 class="widget-title">Tag Cloud</h3>
                            <ul>
                                <li><a href="">Audio</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">Best Event</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">Festival</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">Albums</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">Soundcloud</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">Video</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">Summer</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">People</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">Bands</a>&nbsp;/&nbsp;</li>
                                <li><a href="#">Concert</a>&nbsp;/&nbsp;</li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end blogSidebar -->
                </div><!-- end col-sm03 -->
            </div><!-- end blog-right -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- =============== END BLOG SINGLE ================ -->
@stop