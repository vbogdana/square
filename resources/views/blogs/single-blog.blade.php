
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
                            <li><a href="#">By Admin</a>&nbsp;/&nbsp;</li>
                            <li><a href="#">Categories</a>&nbsp;/&nbsp;</li>
                            <li><a href="#">Gallery</a>&nbsp;/&nbsp;</li>
                            <li><a href="#">2 Comments</a></li>
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
                            <a href="#">Festival</a>&nbsp;/&nbsp;
                            <a href="#">Photography</a>&nbsp;/&nbsp;
                            <a href="#">Party</a>&nbsp;/&nbsp;
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

                    <div class="comment-container">
                        <h1 class="title-comments">
                            3 Comments
                        </h1>
                        <!-- ============== COMMENTS ============= -->
                        <ul class="comments">
                            <li>
                                <div class="comment depth-1">
                                    <div class="left-section">
                                        <img alt="" src="assets/img/blog/author-avatar.jpg">
                                    </div>
                                    <div class="right-section">
                                        <h1>
                                            <a href="#">Gabriel Groza</a>
                                        </h1>
                                        <p class="time-comment">Dec 15, 2015<span class="slashComment">/</span><a class="comment-reply-link" href="#"> Reply</a></p>

                                        <div class="comment-text">
                                            <p>
                                                Literally slow-carb umami, mixtape bicycle rights salvia skateboard. Selfies squid normcore chillwave, slow-carb cred Austin small batch leggings umami cliche trust fund Echo Park Pinterest 8-bit. PBR and B church-key keffiyeh
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li>
                                        <div class="comment depth-2">
                                            <div class="left-section">
                                                <img alt="" src="assets/img/blog/author-avatar.jpg">
                                            </div>
                                            <div class="right-section">

                                                <h1>
                                                    <a href="#">Calin Tasca</a>
                                                </h1>
                                                <p class="time-comment">Dec 15, 2015<span class="slashComment">/</span><a class="comment-reply-link" href="#"> Reply</a></p>
                                                <div class="comment-text">
                                                    <p>
                                                        Literally slow-carb umami, mixtape bicycle rights salvia skateboard. Selfies squid normcore chillwave, slow-carb cred Austin small batch.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="pingback even thread-even depth-1">
                                    <div class="left-section">
                                        <img alt="" src="assets/img/blog/author-avatar.jpg">
                                    </div>
                                    <div class="right-section">

                                        <h1>
                                            <a href="#">Nimeni Daniel</a>
                                        </h1>
                                        <p class="time-comment">Dec 15, 2015<span class="slashComment">/</span><a class="comment-reply-link" href="#"> Reply</a></p>
                                        <div class="comment-text">
                                            <p>
                                                Literally slow-carb umami, mixtape bicycle rights salvia skateboard. Selfies squid normcore chillwave, slow-carb cred Austin small batch leggings umami cliche trust fund Echo Park Pinterest 8-bit. PBR and B church-key keffiyeh
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>		
                        </ul>
                    </div><!-- Comments -->

                    <div class="singleBlogForm">
                        <h1>Leave a comment</h1>
                        <form action="#" method="post" class="comment-form">
                            <input id="author" name="author" type="text" value="" aria-required="true" required placeholder="Name...">
                            <input id="email" name="email" type="text" value="" aria-required="true" required placeholder="Email...">
                            <input id="url" name="url" type="text" value="" placeholder="Website...">
                            <textarea name="comment" placeholder="Message..." rows="6" required></textarea>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" value="Post Comment">
                            </p>
                        </form>
                    </div>
                </div><!-- end col-sm-8 -->
            </div><!-- end blog-left -->
            <div class="blog-right">
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="blogSidebar">
                        <div class="widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li>Audio<span>(2)</span></li>
                                <li>News<span>(3)</span></li>
                                <li>Standard<span>(5)</span></li>
                                <li>Video<span>(1)</span></li>
                                <li>Soundcloud<span>(6)</span></li>
                                <li>Gallery<span>(3)</span></li>
                            </ul>
                        </div><!-- end widget -->
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
                            <h3 class="widget-title">Tweets</h3>
                            <!-- twitter -->
                            <a class="twitter-timeline" href="https://twitter.com/UntoldFestival" data-widget-id="716220714324467712">Tweets by @UntoldFestival</a>
                            <script>!function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); }}(document, "script", "twitter-wjs");</script>
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