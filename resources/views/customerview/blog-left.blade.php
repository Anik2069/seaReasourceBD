@extends("customerview.master")
@section("content")

        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url({{'assets/'}}assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Blog Detail With Left Sidebar</h1>
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
                    <li class="breadcrumb-item active">Blog Detail With Left Sidebar</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">

                    <div class="container">
                        <div class="row">
                            <div class="sec-box">
                                <div class="col-md-12">
        							<div class="col-md-3 col-sm-12 col-lg-3">
        								<div class="sidebar left">
        									<div class="widget style2 Search_filters wow fadeIn" data-wow-delay="0.2s">
        										<h4 class="widget-title2 sudo-bg-red" itemprop="headline">Search Filters</h4>
        										<div class="widget-data">
        											<ul>
        												<li><a href="#" title="" itemprop="url">Fast Food</a> <span>30</span></li>
        												<li><a href="#" title="" itemprop="url">North Indian</a> <span>28</span></li>
        												<li><a href="#" title="" itemprop="url">Chinese</a> <span>25</span></li>
        												<li><a href="#" title="" itemprop="url">Bakery</a> <span>11</span></li>
        												<li><a href="#" title="" itemprop="url">Mughlai</a> <span>7</span></li>
        												<li><a href="#" title="" itemprop="url">Pizza</a> <span>6</span></li>
        												<li><a href="#" title="" itemprop="url">Ice Cream</a> <span>6</span></li>
        												<li><a href="#" title="" itemprop="url">Rolls</a> <span>6</span></li>
        												<li><a href="#" title="" itemprop="url">Cafe</a> <span>5</span></li>
        												<li><a href="#" title="" itemprop="url">Italian</a> <span>5</span></li>
        											</ul>
        										</div>
        									</div>
        									<div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s">
        										<h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
        										<div class="widget-data">
        											<ul>
        												<li><span class="radio-box"><input type="radio" name="filter" id="filt1-1"><label for="filt1-1">Promotions</label></span></li>
        												<li><span class="radio-box"><input type="radio" name="filter" id="filt1-2"><label for="filt1-2">Bookmarked</label></span></li>
        												<li><span class="radio-box"><input type="radio" name="filter" id="filt1-3"><label for="filt1-3">Pure veg</label></span></li>
        												<li><span class="radio-box"><input type="radio" name="filter" id="filt1-4"><label for="filt1-4">Free Delivery</label></span></li>
        												<li><span class="radio-box"><input type="radio" name="filter" id="filt1-5"><label for="filt1-5">Online Payments</label></span></li>
        											</ul>
        										</div>
        									</div>
        									<div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s">
        										<h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
        										<div class="widget-data">
        											<ul>
        												<li><span class="radio-box"><input type="radio" name="filter2" id="filt2-1"><label for="filt2-1">No minimum order 6</label></span></li>
        												<li><span class="radio-box"><input type="radio" name="filter2" id="filt2-2"><label for="filt2-2">Up to ₹150 69</label></span></li>
        												<li><span class="radio-box"><input type="radio" name="filter2" id="filt2-3"><label for="filt2-3">Up to ₹250 72</label></span></li>
        												<li><span class="radio-box"><input type="radio" name="filter2" id="filt2-4"><label for="filt2-4">Up to ₹500</label></span></li>
        											</ul>
        										</div>
        									</div>
        									<div class="widget style2 popular_posts wow fadeIn" data-wow-delay="0.2s">
        										<h4 class="widget-title2 sudo-bg-red" itemprop="headline">Popular Posts</h4>
        										<div class="widget-data">
        											<div class="mini-posts-list">
        												<div class="mini-post-item">
        													<a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/popular-post-img1.jpg" alt="popular-post-img1.jpg" itemprop="image"></a>
        													<div class="mini-post-info">
        														<h5 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
        														<span class="mini-post-data"><i class="fa fa-clock-o"></i> August 10, 2017</span>
        													</div>
        												</div>
        												<div class="mini-post-item">
        													<a href="blog-left.blade.php" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/popular-post-img2.jpg" alt="popular-post-img2.jpg" itemprop="image"></a>
        													<div class="mini-post-info">
        														<h5 itemprop="headline"><a href="blog-left.blade.php" title="" itemprop="url">Food Tech</a></h5>
        														<span class="mini-post-data"><i class="fa fa-clock-o"></i> November 12, 2017</span>
        													</div>
        												</div>
        												<div class="mini-post-item">
        													<a href="blogview.blade.php" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/popular-post-img3.jpg" alt="popular-post-img3.jpg" itemprop="image"></a>
        													<div class="mini-post-info">
        														<h5 itemprop="headline"><a href="blogview.blade.php" title="" itemprop="url">Food Tech</a></h5>
        														<span class="mini-post-data"><i class="fa fa-clock-o"></i> May 15, 2017</span>
        													</div>
        												</div>
        												<div class="mini-post-item">
        													<a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/popular-post-img4.jpg" alt="popular-post-img4.jpg" itemprop="image"></a>
        													<div class="mini-post-info">
        														<h5 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
        														<span class="mini-post-data"><i class="fa fa-clock-o"></i> March 20, 2017</span>
        													</div>
        												</div>
        											</div>
        										</div>
        									</div>
        									<div class="widget style2 category_posts wow fadeIn" data-wow-delay="0.2s">
        										<h4 class="widget-title2 sudo-bg-red" itemprop="headline">Categories</h4>
        										<div class="widget-data">
        											<div class="mini-posts-list">
        												<div class="mini-post-item">
        													<a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/popular-post-img2-1.jpg" alt="popular-post-img2-1.jpg" itemprop="image"></a>
        													<div class="mini-post-info">
        														<h5 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
        														<span class="mini-post-data"><i class="fa fa-clock-o"></i> August 10, 2017</span>
        													</div>
        												</div>
        												<div class="mini-post-item">
        													<a href="blog-left.blade.php" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/popular-post-img2-2.jpg" alt="popular-post-img2-2.jpg" itemprop="image"></a>
        													<div class="mini-post-info">
        														<h5 itemprop="headline"><a href="blog-left.blade.php" title="" itemprop="url">Food Tech</a></h5>
        														<span class="mini-post-data"><i class="fa fa-clock-o"></i> November 12, 2017</span>
        													</div>
        												</div>
        												<div class="mini-post-item">
        													<a href="blogview.blade.php" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/popular-post-img2-3.jpg" alt="popular-post-img2-3.jpg" itemprop="image"></a>
        													<div class="mini-post-info">
        														<h5 itemprop="headline"><a href="blogview.blade.php" title="" itemprop="url">Food Tech</a></h5>
        														<span class="mini-post-data"><i class="fa fa-clock-o"></i> May 15, 2017</span>
        													</div>
        												</div>
        												<div class="mini-post-item">
        													<a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/popular-post-img2-4.jpg" alt="popular-post-img2-4.jpg" itemprop="image"></a>
        													<div class="mini-post-info">
        														<h5 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
        														<span class="mini-post-data"><i class="fa fa-clock-o"></i> March 20, 2017</span>
        													</div>
        												</div>
        											</div>
        										</div>
        									</div>
        								</div><!--Sidebar -->
        							</div>
        							<div class="col-md-9 col-sm-12 col-lg-9">
        								<div class="blog-detail-wrapper">
        									<div class="blog-detail-thumb wow fadeIn" data-wow-delay="0.2s">
        										<img src="assets/images/resource/blog-detial-img.jpg" alt="blog-detial-img.jpg" itemprop="image">
        									</div>
        									<div class="blog-detail-info">
        										<span class="post-detail-date red-clr"><i class="fa fa-clock-o"></i> August 10, 2017</span>
        										<div class="post-meta">
        											<span><i class="fa fa-eye red-clr"></i> 95 Views</span>
        											<span><i class="fa fa-comment-o red-clr"></i> 5 Comments</span>
        										</div>
        									</div>
        									<h1 itemprop="headline">Tried Their Amazing Grilled Ham</h1>
        									<p itemprop="description">Rennie White, an advertising manager in New York City, leaves for work 10 minutes later these days because she no longer has to wait in line for coffee at a Dunkin' Donuts outlet. Instead, she preorders coffee by sending a text message from her cellphone on the way to work. "I can get off the train and get the coffee and not break my flow," Ms. White says</p>
        									<blockquote><p itemprop="headline">Michel ivauedaus rutrum mi utercture aliquam In habitasse platore dictumst. Integer sagittis  vulputate  similique sunt in culpa qui officia deserunt.</p></blockquote>
        									<p itemprop="description">Rennie White, an advertising manager in New York City, leaves for work 10 minutes later these days because she no longer has to wait in line for coffee at a Dunkin' Donuts outlet. Instead, she preorders coffee by sending a text message from her cellphone on the way to work. "I can get off the train and get the coffee and not break my flow," Ms. White says</p>
        									<p itemprop="description"><a class="alignnone wow fadeIn" data-wow-delay="0.2s" href="assets/images/resource/blog-detial-img2.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="assets/images/resource/blog-detial-img2.jpg" alt="blog-detial-img2.jpg" itemprop="image"></a></p>
        									<p itemprop="description"><span class="big-letter">R</span>ennie White, an advertising manager in New York City, leaves for work 10 minutes later these days because she no longer has to wait in line for coffee at a Dunkin' Donuts outlet. Instead, she preorders coffee by sending a text message from her cellphone <a class="alignnone wow fadeIn" data-wow-delay="0.2s" href="assets/images/resource/blog-detial-img3.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="assets/images/resource/blog-detial-img3.jpg" alt="blog-detial-img3.jpg" itemprop="image"></a> Ennie White, an advertising manager in New York City, leaves for work 10 minutes later these days because she no longer has to wait in line for coffee at a Dunkin' Donuts outlet. Instead, she preorders coffee by sending a text message from her cellphone on the way to work. "I can get off the train and get the coffee and not break my flow," Ms. White says</p>
        									<div class="post-tags red-clr">
        										<span>Tags:</span>
        										<a href="#" title="" itemprop="url">#fish</a>,<a href="#" title="" itemprop="url">#pasta</a>,<a href="#" title="" itemprop="url">#soups</a>
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
        								<div class="author-info-wrapper">
        									<h3 class="title4" itemprop="headline"><span class="sudo-bottom sudo-bg-red">About</span> The Author</h3>
        									<div class="author-box">
        										<img class="brd-rd50" src="assets/images/resource/author-img.jpg" alt="author-img.jpg" itemprop="image">
        										<div class="author-info">
        											<h4 itemprop="headline"><a href="#" title="" itemprop="url">Mr.John Cristopher</a></h4>
        											<p itemprop="description">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. uni harum quidem sed rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihilares impedit quo repellendus eligendi optio cumque nihilare impedit quo minus id quod maxime.</p>
        											<a class="red-clr" href="#" title="Webinane" itemprop="url" target="_blank">webinane.com</a>
        										</div>
        									</div>
        								</div>
        								<div class="comments-wrapper">
        									<h3 class="title4" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Comm</span>ents (2)</h3>
        									<ul class="comments-thread">
        										<li>
        											<div class="comment">
        												<img class="brd-rd50" src="assets/images/resource/comment1.jpg" alt="comment1.jpg">
        												<div class="comment-info">
        													<h4 itemprop="headline"><a href="#" title="" itemprop="url">Johny Rewalt</a></h4>
        													<i>17 August 2018 at 12.00pm / <a class="comment-reply-link red-clr" href="#" title="" itemprop="url">Reply</a></i>
        													<p itemprop="description">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. uni harum quidem sed rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihilares impedit quo repellendus eligendi optio cumque nihilare impedit quo minus id quod maxime.</p>
        												</div>
        											</div>
        											<ul class="comment-reply">
        												<li>
        													<div class="comment">
        														<img class="brd-rd50" src="assets/images/resource/comment2.jpg" alt="comment2.jpg">
        														<div class="comment-info">
        															<h4 itemprop="headline"><a href="#" title="" itemprop="url">Rewalt Johny</a></h4>
        															<i>17 August 2018 at 08.00pm / <a class="comment-reply-link red-clr" href="#" title="" itemprop="url">Reply</a></i>
        															<p itemprop="description">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. uni harum quidem sed rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihilares impedit quo repellendus eligendi optio cumque nihilare impedit quo minus id quod maxime.</p>
        														</div>
        													</div>
        												</li>
        											</ul>
        										</li>
        									</ul>
        								</div>
        								<div class="leav-comment-wrapper">
        									<h3 class="title4" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Leave</span> a Reply</h3>
        									<form class="reply-form">
        										<div class="row">
        											<div class="col-md-4 col-sm-6 col-lg-4">
        												<input class="brd-rd2" type="text" placeholder="Name">
        											</div>
        											<div class="col-md-4 col-sm-6 col-lg-4">
        												<input class="brd-rd2" type="email" placeholder="Email">
        											</div>
        											<div class="col-md-4 col-sm-12 col-lg-4">
        												<input class="brd-rd2" type="text" placeholder="Subject">
        											</div>
        											<div class="col-md-12 col-sm-12 col-lg-12">
        												<textarea class="brd-rd2" placeholder="Message"></textarea>
        											</div>
        											<div class="col-md-12 col-sm-12 col-lg-12">
        												<button class="brd-rd3 red-bg" type="submit">SUBMIT NOW</button>
        											</div>
        										</div>
        									</form>
        								</div>
        							</div>
                                </div>
                            </div><!-- Section Box -->
                        </div>
                    </div>

            </div>
        </section>
    @endsection
