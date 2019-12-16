<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
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
                        <h1 itemprop="headline">Search Your Favourite Food</h1>
                        <form class="restaurant-search-form brd-rd2">
                            <div class="row mrg10">
                                <div class="col-md-6 col-sm-5 col-lg-5 col-xs-12">
                                    <div class="input-field brd-rd2"><input class="brd-rd2" type="text"
                                                                            placeholder="Restaurant Name"></div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                                    <div class="input-field brd-rd2"><i class="fa fa-map-marker"></i><input
                                            class="brd-rd2" type="text" placeholder="Search Location"><i
                                            class="fa fa-location-arrow"></i></div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-lg-3 col-xs-12">
                                    <button class="brd-rd2 red-bg" type="submit">SEARCH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                <li class="breadcrumb-item active">Food Details</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block gray-bg bottom-padd210 top-padd30">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-box">
                            <div class="sec-wrapper">
                                <div class="col-md-8 col-sm-12 col-lg-8">
                                    <div class="restaurant-detail-wrapper">
                                        <div class="restaurant-detail-info">
                                            <div class="restaurant-detail-thumb">
                                                <ul class="restaurant-detail-img-carousel">
                                                    <li><img class="brd-rd3"
                                                             src="{{ asset('uploads/product/'.$value['file_name1']) }}"
                                                             alt="restaurant-detail-big-img1-1.jpg" itemprop="image">
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="restaurant-detail-title">
                                                <h1 itemprop="headline">{{$value['pname']}}</h1>
                                                <div class="info-meta">
                                                    <span>Greater Kailash (GK) 2</span>
                                                    <span><a href="#" title="" itemprop="url">Domino's</a></span>
                                                </div>
                                                <div class="rating-wrapper">
                                                    <a class="gradient-brd brd-rd2" href="#" title="" itemprop="url"><i
                                                            class="fa fa-star"></i> Rate <i>4.0</i></a>
                                                    <div class="rate-share brd-rd5">
                                                        <div class="rating-box-wrapper">
                                                            <span>Rate</span>
                                                            <div class="rating-box">
                                                                <span class="brd-rd2 clr1 on"></span>
                                                                <span class="brd-rd2 clr2 on"></span>
                                                                <span class="brd-rd2 clr3 on"></span>
                                                                <span class="brd-rd2 clr4 on"></span>
                                                                <span class="brd-rd2 clr5 on"></span>
                                                                <span class="brd-rd2 clr6 on"></span>
                                                                <span class="brd-rd2 clr7 off"></span>
                                                                <span class="brd-rd2 clr8 off"></span>
                                                                <i>4.0</i>
                                                            </div>
                                                        </div>
                                                        <div class="share-wrapper">
                                                            <div class="fb-share">
                                                                <label class="switch">
                                                                    <input type="checkbox">
                                                                    <span class="switch-slider brd-rd30"></span>
                                                                </label>
                                                                <a class="facebook brd-rd2" href="#" title=""
                                                                   itemprop="url"><i class="fa fa-facebook-square"></i>
                                                                    Share on Facebook</a>
                                                            </div>
                                                            <div class="fb-share">
                                                                <label class="switch">
                                                                    <input type="checkbox">
                                                                    <span class="switch-slider brd-rd30"></span>
                                                                </label>
                                                                <a class="twitter brd-rd2" href="#" title=""
                                                                   itemprop="url"><i class="fa fa-twitter"></i> Share on
                                                                    Twitter</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="price">${{$value['price']}}</span><br>
                                                <h4>Food Description</h4>
                                                <p itemprop="description">{{$value['description']}}</p>
                                                <!--		<p itemprop="description">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. uni harum quidem sed rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihilares impedit quo repellendus eligendi optio cumque nihilare impedit quo minus id quod maxime.</p>
                                                -->
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="order-wrapper">
                                        <div class="order-inner gradient-brd">
                                            <h4 itemprop="headline">Your Order</h4>
                                            <div class="order-list-wrapper">
                                                <form class="" method="post" action="/order">
                                                    @csrf
                                                    <ul class="order-list-inner">
                                                        <li>
                                                            <div class="dish-name">
                                                                <i></i> <h6 itemprop="headline">Your Name:</h6> <span
                                                                    class="price"></span>
                                                            </div>

                                                            <div class="qty-wrap">
                                                                <input type="textbox"  name="customername" class="form-control">
                                                            </div>
                                                            <div class="dish-name">
                                                                <i></i> <h6 itemprop="headline">Your Phone Number:</h6> <span
                                                                    class="price"></span>
                                                            </div>

                                                            <div class="qty-wrap">
                                                                <input type="textbox" name="phone" class="form-control">
                                                            </div>
                                                            <div class="dish-name">
                                                                <i></i> <h6 itemprop="headline">Your Email:</h6> <span
                                                                    class="price"></span>
                                                            </div>

                                                            <div class="qty-wrap">
                                                                <input name="email" type="email" class="form-control">
                                                            </div>


                                                            <div class="dish-name">
                                                                <i>2</i> <h6 itemprop="headline">Select District :</h6>
                                                                <span class="price"></span>
                                                            </div>
                                                            <div class="dish-ingredients">

                                                                <select class="custom-select" name="district" id="a">
                                                                    <option value="" selected>Choose...</option>
                                                                    <option value="Dhaka">Dhaka</option>
                                                                    <option value="Mymensingh">Mymensingh</option>
                                                                </select>
                                                            </div>

                                                            <div class="dish-name">
                                                                <i></i> <h6 itemprop="headline">Your Address:</h6>
                                                                <span
                                                                    class="price"></span>
                                                            </div>

                                                            <div class="qty-wrap">
                                                                <input type="textbox" name="address" class="form-control">
                                                            </div>

                                                            <div class="dish-name">
                                                                <i></i> <h6 itemprop="headline">Food Name:</h6>
                                                                <span
                                                                    class="price"></span>
                                                            </div>

                                                            <div class="dish-name">
                                                                <i></i> <h6 itemprop="headline">{{$value['pname']}}</h6>
                                                                <span class="price">${{$value['price']}}</span>
                                                            </div>
                                                            <input type="text" name="foodname" value="{{$value['pname']}}" style="display: none" >
                                                            <input type="text" name="price" value="{{$value['price']}}" style="display: none" >


                                                            <div class="dish-name">
                                                                <i></i> <h6 itemprop="headline">Quantity:</h6> <span
                                                                    class="price"></span>
                                                            </div>

                                                            <div class="qty-wrap">
                                                                <input class="qty" name="quantity" type="text" value="1">
                                                            </div>
                                                        </li>
                                                        <li>






                                                            <div class="dish-name">
                                                                <i></i> <h6 itemprop="headline">Payment Method:</h6>
                                                                <span
                                                                    class="price"></span>
                                                            </div>



                                                            <input type="checkbox" name="member" id="member"
                                                                   value="member" onclick="myFunction()">
                                                            <label for="memberID" id="labelmemberID">Credit Card </label>
                                                            <input type="checkbox" name="cash" id="member1"
                                                                   value="member" onclick="myFunction1()" >
                                                            <label for="memberID" id="labelmemberID">Hand Cash</label>
                                                            <input type="text" class="form-control" name="memberID" id="memberID" disabled>



                                                            <script>
                                                                function myFunction() {
                                                                    if (document.getElementById('member').checked == true) {
                                                                        document.getElementById("memberID").disabled = false;
                                                                    }
                                                                    if (document.getElementById('member').checked == false) {
                                                                        document.getElementById('memberID').disabled = true;
                                                                    }
                                                                }

                                                                function myFunction1() {
                                                                    if (document.getElementById('member').checked == true) {
                                                                        document.getElementById("memberID").disabled = false;
                                                                    }
                                                                    if (document.getElementById('member').checked == false) {
                                                                        document.getElementById('memberID').disabled = true;
                                                                    }
                                                                }


                                                            </script>


                                                        </li>
                                                    </ul>
                                                    <ul class="order-method brd-rd2 red-bg">
                                                 <!--       <button type="submit">   <a class="brd-rd3" href="#" title="" itemprop="url">Order Now</a>
                                                        </button>
-->
                                                        <li>  <button type="submit" class="btn btn-primary">

                                                           CONFIRM
                                                                ORDER
                                                            </button></li>
                                                    </ul>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Section Box -->
        </div>
    </section>

    <section>
        <div class="block no-padding red-bg">
            <img class="bottom-clouds-mockup" src="../{{'assets/'}}assets/images/resource/clouds2.png" alt="clouds2.png"
                 itemprop="image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="app-sec">
                            <div class="row">
                                <div
                                    class="col-md-4 hidden-sm col-md-offset-1 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-1">
                                    <div class="app-mockup text-right overlape-110 wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="{{'assets/'}}assets/images/resource/app-mockup.png"
                                             alt="app-mockup.png" itemprop="image"></div>
                                </div>
                                <div
                                    class="col-md-6 col-md-offset-1 col-sm-12 col-sm-offset-0 col-lg-6 col-lg-offset-1">
                                    <div class="app-info">
                                        <h4 itemprop="headline">The Best Food Delivery App</h4>
                                        <p itemprop="description">We have a launch team that focuses on one city at a
                                            time. At the end of the day, we're a marketplace. In order to make an
                                            effective marketplace, you need critical mass. We need enough restaurants
                                            that quality and variety</p>
                                        <div class="app-download-btns">
                                            <a class="" href="#" title="Google Play Store" itemprop="url"
                                               target="_blank"><img
                                                    src="../{{'assets/'}}assets/images/resource/app-download-btn1.png"
                                                    alt="app-download-btn1.png" itemprop="image"></a>
                                            <a class="" href="#" title="Apple App Store" itemprop="url" target="_blank"><img
                                                    src="../{{'assets/'}}assets/images/resource/app-download-btn2.png"
                                                    alt="app-download-btn2.png" itemprop="image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- App Section -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- red section -->

    <footer>
        <div class="block top-padd80 bottom-padd80 dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="footer-data">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                        <div class="logo"><h1 itemprop="headline"><a href="#" title="Home"
                                                                                     itemprop="url"><img
                                                        src="../{{'assets/'}}assets/images/logo.png" alt="logo.png"
                                                        itemprop="image"></a></h1></div>
                                        <p itemprop="description">Food Ordering is a Premium HTML Template. Best choice
                                            for your online store. Let purchase it to enjoy now</p>
                                        <div class="social2">
                                            <a class="brd-rd50" href="#" title="Facebook" itemprop="url"
                                               target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a class="brd-rd50" href="#" title="Google Plus" itemprop="url"
                                               target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a class="brd-rd50" href="#" title="Twitter" itemprop="url" target="_blank"><i
                                                    class="fa fa-twitter"></i></a>
                                            <a class="brd-rd50" href="#" title="Pinterest" itemprop="url"
                                               target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                            <li><i class="fa fa-map-marker"></i> 123 New Design Str, ABC Building,
                                                melbourne, Australia.
                                            </li>
                                            <li><i class="fa fa-phone"></i> (0044) 8647 1234 587</li>
                                            <li><i class="fa fa-envelope"></i> <a href="#" title="" itemprop="url">hello@yourdomain.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Footer Data -->
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- footer -->
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
                    <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i
                            class="fa fa-facebook"></i> Facebook</a>
                    <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i
                            class="fa fa-google-plus"></i> Google</a>
                    <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i
                            class="fa fa-twitter"></i> Twitter</a>
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
                    <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i
                            class="fa fa-facebook"></i> Facebook</a>
                    <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i
                            class="fa fa-google-plus"></i> Google</a>
                    <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i
                            class="fa fa-twitter"></i> Twitter</a>
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

    <!-- <div class="payment-popup-wrapper cash-method text-center">
        <div class="payment-popup-inner" style="background-image: url(assets/images/payment-popup-bg.jpg);">
            <a class="payment-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
            <h4 class="payment-popup-title" itemprop="headline"><i class="fa fa-money red-clr"></i> Cash Payment</h4>
            <div class="payment-popup-info">
                <h5 itemprop="headline">Billing Details</h5>
                <form class="payment-popup-info-inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <ul class="payment-info-list">
                                <li><span>Name:</span> John Smith</li>
                                <li><span>Email:</span> john@domain.com</li>
                                <li><span>Phone:</span> 0231456879</li>
                                <li><span>Country:</span> India</li>
                                <li><span>Address:</span> 121 King Street Melbourne Victoria Austrailia <a class="red-clr" href="#" title="" itemprop="url"><i class="fa fa-pencil"></i> Edit</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <label>Order Note <sup>*</sup></label>
                            <textarea class="brd-rd3" placeholder="Description..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="confrm-order red-bg">
                <ul class="order-total">
                    <li><span>SubTotal</span> <i>$158</i></li>
                    <li><span>Delivery fee</span> <i>$70</i></li>
                    <li><span>Tax</span> <i>$12</i></li>
                </ul>
                <div class="confrm-order-btn">
                    <a class="brd-rd3" href="#" title="" itemprop="url">CONFIRM ORDER</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="payment-popup-wrapper card-method text-center">
        <div class="payment-popup-inner" style="background-image: url(assets/images/payment-popup-bg.jpg);">
            <a class="payment-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
            <h4 class="payment-popup-title" itemprop="headline"><i class="fa fa-money red-clr"></i> Card Payment</h4>
            <div class="payment-popup-info">
                <h5 itemprop="headline">Billing Details</h5>
                <form class="payment-popup-info-inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <ul class="payment-info-list">
                                <li><span>Name:</span> John Smith</li>
                                <li><span>Email:</span> john@domain.com</li>
                                <li><span>Phone:</span> 0231456879</li>
                                <li><span>Country:</span> India</li>
                                <li><span>Address:</span> 121 King Street Melbourne Victoria Austrailia <a class="red-clr" href="#" title="" itemprop="url"><i class="fa fa-pencil"></i> Edit</a></li>
                            </ul>
                            <h5 itemprop="headline">Payment Method</h5>
                            <ul class="payment-method">
                                <li>
                                    <div class="radio-box">
                                        <input type="radio" name="mthd22" id="mthd2-1">
                                        <label for="mthd2-1"><img src="assets/images/card-img.jpg" alt="card-img.jpg" itemprop="image"></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-box">
                                        <input type="radio" name="mthd22" id="mthd2-2">
                                        <label for="mthd2-2"><img src="assets/images/bank-img.jpg" alt="bank-img.jpg" itemprop="image"></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <label>Order Note <sup>*</sup></label>
                            <textarea class="brd-rd3" placeholder="Description..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="confrm-order red-bg">
                <ul class="order-total">
                    <li><span>SubTotal</span> <i>$158</i></li>
                    <li><span>Delivery fee</span> <i>$70</i></li>
                    <li><span>Tax</span> <i>$12</i></li>
                </ul>



                Home Divison :
<select class="custom-select" name="division" id="comboBox1">
<option value="" selected>Choose...</option>
$result = mysqli_query($connection,"select * from divison");
while($row = mysqli_fetch_array($result )) {
?>
    <option valueption>
}
    </select>






    </div>
    <div class="col-md-6">


        Home District :
        <select class="custom-select" name="district" id="comboBox2">
            <option value="" selected>Choose...</option>
        </select>



                        <div class="confrm-order-btn">
                            <a class="brd-rd3" href="#" title="" itemprop="url">CONFIRM ORDER</a>
                        </div>
                    </div>
                </div>
            </div> -->


    <!-- <div class="payment-popup-wrapper thanks-message text-center">
        <div class="payment-popup-inner red-bg">
            <i><img src="assets/images/tick-icon.png" alt="tick-icon.png" itemprop="image"></i>
            <h3 itemprop="headline">Thanks For Your Order</h3>
            <p itemprop="description">You Will Receive an email Confirmation Shortly at <a href="#" title="" itemprop="url">info@domain.com</a></p>
            <img class="thanks-message-mockup right" src="assets/images/resource/thanks-message-mockup.png" alt="thanks-message-mockup.png" itemprop="image">
        </div>
    </div> -->


</main><!-- Main Wrapper -->


<script src="../{{'assets/'}}assets/js/jquery.min.js"></script>
<script src="../{{'assets/'}}assets/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="../{{'assets/'}}assets/js/google-map-int2.js"></script>
<script src="../{{'assets/'}}assets/js/plugins.js"></script>
<script src="../{{'assets/'}}assets/js/main.js"></script>
</body>

</html>








