@extends ("customerview.master")
@section ("content")
        <section>
            <div class="block">
				<div class="fixed-bg" style="background-image: url({{'assets/'}}assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<div class="page-title-inner">
							<h1 itemprop="headline">Contact Us</h1>
							<span>Food & Sea Product Company's Website</span>
						</div>
					</div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">

                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="sec-box">
                                <div class="contact-info-sec text-center">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="contact-info-box">
                                                <i class="fa fa-phone-square"></i>
                                                <h5 itemprop="headline">PHONE</h5>
                                                <p itemprop="description">Phone 01: (0091) 8547 632521</p>
                                                <p itemprop="description">Phone 02: (084) 965 4788</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="contact-info-box">
                                                <i class="fa fa-map-marker"></i>
                                                <h5 itemprop="headline">ADDRESS</h5>
                                                <p itemprop="description">5Tth Floor, AH Building, 756 New St Melbourne, Australia.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="contact-info-box">
                                                <i class="fa fa-envelope"></i>
                                                <h5 itemprop="headline">EMAIL</h5>
                                                <p itemprop="description">support@yourdomain.com</p>
                                                <p itemprop="description">hello@yourdomain.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @if (session('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ session('success') }}</strong>
                                        </div>
                                    @endif


                                    @if (session('error'))
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ session('error') }}</strong>
                                        </div>
                                    @endif


                                <div class="contact-form-wrapper text-center">
                                    <div class="contact-form-inner">
                                        <h3 itemprop="headline">If You Got Any Questions <br> Please Do Not Hesitate to Send us a Message.</h3>
                                        <div id="message"></div>
                                        <form method="post" action="/sendmessage" >
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-lg-12">
                                                    <input id="name" name="name" type="text" placeholder="Your Name">
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-lg-12">
                                                    <input id="email" name="email" type="email" placeholder="Your Email">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <input name="subject" type="text" placeholder="Subject">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <textarea id="comments" name="comments" placeholder="Message"></textarea>
                                                </div>
                                                <!--<div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"></div>
                                                </div>-->
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <button class="brd-rd2" type="submit">SEND MESSAGE</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- Contact Form Wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
