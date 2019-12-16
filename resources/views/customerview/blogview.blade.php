<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Food Ordering HTML Template</title>
    <link rel="shortcut icon" href="../{{'assets/'}}assets/images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="../{{'assets/'}}assets/css/icons.min.css">
    <link rel="stylesheet" href="../{{'assets/'}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../{{'assets/'}}assets/css/main.css">
    <link rel="stylesheet" href="../{{'assets/'}}assets/css/red-color.css">
    <link rel="stylesheet" href="../{{'assets/'}}assets/css/yellow-color.css">
    <link rel="stylesheet" href="../{{'assets/'}}assets/css/responsive.css">
</head>
<body itemscope>
    <main>
     @include("customerview.header1")
        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(../{{'assets/'}}assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Blog Details</h1>
                                <span>A Greate Restaurant Website</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Blog Detail With No Sidebar</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="sec-box">
    							<div class="col-md-12 col-sm-12 col-lg-12">
    								<div class="blog-detail-wrapper">
    									<div class="blog-detail-thumb wow fadeIn" data-wow-delay="0.2s">
    										<img src="{{ asset('uploads/blogs/'.$value['image']) }}" alt="blog-detial-img2-1.jpg" itemprop="image">
    									</div>
    									<div class="blog-detail-info">
    										<span class="post-detail-date red-clr"><i class="fa fa-clock-o"></i> August 10, 2017</span>
    										<div class="post-meta">
    											<span><i class="fa fa-eye red-clr"></i> 95 Views</span>
    											<span><i class="fa fa-comment-o red-clr"></i> 5 Comments</span>
    										</div>
    									</div>
    									<h1 itemprop="headline">{{$value['title']}}</h1>
    									<p itemprop="description">Rennie White, an advertising manager in New York City, leaves for work 10 minutes later these days because she no longer has to wait in line for coffee at a Dunkin' Donuts outlet. Instead, she preorders coffee by sending a text message from her cellphone on the way to work. "I can get off the train and get the coffee and not break my flow," Ms. White says</p>
    									<blockquote><p itemprop="headline">Michel ivauedaus rutrum mi utercture aliquam In habitasse platore dictumst. Integer sagittis  vulputate  similique sunt in culpa qui officia deserunt.</p></blockquote>
    									<p itemprop="description">Rennie White, an advertising manager in New York City, leaves for work 10 minutes later these days because she no longer has to wait in line for coffee at a Dunkin' Donuts outlet. Instead, she preorders coffee by sending a text message from her cellphone on the way to work. "I can get off the train and get the coffee and not break my flow," Ms. White says</p>
    									<div class="post-tags red-clr">
    										<span>Tags:</span>
                                            {{$value['tags']}}
    									</div>
    									<div class="post-cate red-clr">
    										<span>Category:</span>
    										<a href="#" title="Italian cuisine" itemprop="url">Italian cuisine</a>
    									</div>
    									<div class="post-share">
    										<span>Share:</span>
    										<a class="brd-rd2" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
    										<a class="brd-rd2" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
    										<a class="brd-rd2" href="#" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest"></i></a>
    										<a class="brd-rd2" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
    										<a class="brd-rd2" href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a>
    										<a class="brd-rd2" href="#" title="Vimeo" itemprop="url" target="_blank"><i class="fa fa-vimeo"></i></a>
    									</div>
    									<div class="post-next-prev">
    										<a class="prev-post" href="#" title="Previous Post" itemprop="url"><i class="fa fa-angle-left"></i> PREV</a> -
    										<a class="next-post" href="#" title="Next Post" itemprop="url">NEXT <i class="fa fa-angle-right"></i></a>
    									</div>
    								</div>
                                    <!--
    								<div class="author-info-wrapper">
    									<h3 class="title4" itemprop="headline"><span class="sudo-bottom sudo-bg-red">About</span> The Author</h3>
    									<div class="author-box">
    										<img class="brd-rd50" src="..ets/images/resource/author-img.jpg" alt="author-img.jpg" itemprop="image">
    										<div class="author-info">
    											<h4 itemprop="headline"><a href="#" title="" itemprop="url">Mr.John Cristopher</a></h4>
    											<p itemprop="description">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. uni harum quidem sed rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihilares impedit quo repellendus eligendi optio cumque nihilare impedit quo minus id quod maxime.</p>
    											<a class="red-clr" href="#" title="Webinane" itemprop="url" target="_blank">webinane.com</a>
    										</div>
    									</div>
    								</div>-->
    								<div class="comments-wrapper">
    									<h3 class="title4" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Comm</span>ents </h3>
    									<ul class="comments-thread">
    										<li>
                                                @foreach($comments as $comm)
    											<div class="comment">
    												<img class="brd-rd50" src="{{ asset('uploads/blogs/15759072611.png') }}" width="150px" alt="comment1.jpg">
    												<div class="comment-info">
    													<h4 itemprop="headline"><a href="#" title="" itemprop="url">{{$comm['name']}}</a></h4>
    													<i> {{$comm['created_at']}} <a class="comment-reply-link red-clr" href="#" title="" itemprop="url">Reply</a></i><br>

    													<p itemprop="description">



                                                         {{$comm['message']}}.</p>
    												</div>
    											</div>
                                                @endforeach
                                                <!--
    											<ul class="comment-reply">
    												<li>
    													<div class="comment">
    														<img class="brd-rd50" src="../{{'assets/'}}assets/images/resource/comment2.jpg" alt="comment2.jpg">
    														<div class="comment-info">
    															<h4 itemprop="headline"><a href="#" title="" itemprop="url">Rewalt Johny</a></h4>
    															<i>17 August 2018 at 08.00pm / <a class="comment-reply-link red-clr" href="#" title="" itemprop="url">Reply</a></i>
    															<p itemprop="description">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. uni harum quidem sed rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihilares impedit quo repellendus eligendi optio cumque nihilare impedit quo minus id quod maxime.</p>
    														</div>
    													</div>
    												</li>
    											</ul> -->
    										</li>
    									</ul>
    								</div>
    								<div class="leav-comment-wrapper">
    									<h3 class="title4" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Leave</span> a Reply</h3>
    									<form class="reply-form" action="/postcomment" method="post">
                                            @csrf
    										<div class="row">
    											<div class="col-md-4 col-sm-6 col-lg-12">
    												<input class="brd-rd2"  name="name" type="text" placeholder="Your Name">
                                                    <input class="brd-rd2"  name="id" type="text" value="{{$value['id']}}" placeholder="Your Name" style="display:none;">

                                                </div>
    											<div class="col-md-4 col-sm-6 col-lg-12">
    												<input class="brd-rd2" name="email" type="email" placeholder="Your Email">
    											</div>
    											<div class="col-md-4 col-sm-12 col-lg-12">
    												<input class="brd-rd2" name="subject" type="text" placeholder="Subject">
    											</div>
    											<div class="col-md-12 col-sm-12 col-lg-12">
    												<textarea class="brd-rd2" name="message" placeholder="Message"></textarea>
    											</div>
    											<div class="col-md-12 col-sm-12 col-lg-12">
    												<button class="brd-rd3 red-bg" type="submit">SEND MESSAGE</button>
    											</div>
    										</div>
    									</form>
    								</div>
    							</div>
                            </div><!-- Section Box -->
                            </div>
                        </div>
                    </div>

            </div>
        </section>

        <footer>
            <div class="block top-padd80 bottom-padd80 dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                            <div class="logo"><h1 itemprop="headline"><a href="#" title="Home" itemprop="url"><img src="assets/images/logo.png" alt="logo.png" itemprop="image"></a></h1></div>
                                            <p itemprop="description">Food Ordering is a Premium HTML Template. Best choice for your online store. Let purchase it to enjoy now</p>
                                            <div class="social2">
                                                <a class="brd-rd50" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd50" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="brd-rd50" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd50" href="#" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget information_links wow fadeIn" data-wow-delay="0.2s">
                                            <h4 class="widget-title" itemprop="headline">INFORMATION</h4>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Careers</a></li>
                                                <li><a href="#" title="" itemprop="url">Investor Relations</a></li>
                                                <li><a href="#" title="" itemprop="url">Press Releases</a></li>
                                                <li><a href="#" title="" itemprop="url">Shop with Points</a></li>
                                                <li><a href="#" title="" itemprop="url">More Branches</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget customer_care wow fadeIn" data-wow-delay="0.3s">
                                            <h4 class="widget-title" itemprop="headline">CUSTOMER CARE</h4>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Returns</a></li>
                                                <li><a href="#" title="" itemprop="url">Shipping Info</a></li>
                                                <li><a href="#" title="" itemprop="url">Gift Cards</a></li>
                                                <li><a href="#" title="" itemprop="url">Size Guide</a></li>
                                                <li><a href="#" title="" itemprop="url">Money Back</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget get_in_touch wow fadeIn" data-wow-delay="0.4s">
                                            <h4 class="widget-title" itemprop="headline">GET IN TOUCH</h4>
                                            <ul>
                                               <li><i class="fa fa-map-marker"></i> 123 New Design Str, ABC Building, melbourne, Australia.</li>
                                               <li><i class="fa fa-phone"></i> (0044) 8647 1234 587</li>
                                               <li><i class="fa fa-envelope"></i> <a href="#" title="" itemprop="url">hello@yourdomain.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Footer Data -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="bottom-bar dark-bg text-center">
           <div class="container">
                <p itemprop="description"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
        </div><!-- Bottom Bar -->

        <div class="log-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="log-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <h4 itemprop="headline">SIGN IN</h4>
                        <span>with your social network</span>
                    </div>
                    <div class="popup-social text-center">
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                    <form class="sign-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" placeholder="Username or Email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit">SIGN IN</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn" href="#" title="" itemprop="url">Not a member? Sign up</a>
                                <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="sign-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="sign-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <h4 itemprop="headline">SIGN UP</h4>
                        <span>with your social network</span>
                    </div>
                    <div class="popup-social text-center">
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                    <form class="sign-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" placeholder="Username">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit">REGISTER NOW</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn" href="#" title="" itemprop="url">Already Registered? Sign in</a>
                                <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main><!-- Main Wrapper -->

    <script src="../{{'assets/'}}assets/js/jquery.min.js"></script>
    <script src="../{{'assets/'}}assets/js/bootstrap.min.js"></script>
    <script src="../{{'assets/'}}assets/js/plugins.js"></script>
    <script src="../{{'assets/'}}assets/js/main.js"></script>
</body>

</html>
