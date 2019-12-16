@extends("customerview.master")
@section("content")
    <section>
        <div class="block">
            <div class="fixed-bg" style="background-image: url({{'assets/'}}assets/images/topbg.jpg);"></div>
            <div class="page-title-wrapper text-center">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="page-title-inner">
                        <h1 itemprop="headline">Our Item View</h1>
                        <span>Our Product Our Identity</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                <li class="breadcrumb-item active"> Our Food/Items View</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="remove-ext">
                                <div class="row">
                                    @foreach( $value as $val)
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.2s">
                                                <div class="popular-dish-thumb">
                                                    <a href="food-detail.blade.php" title="" itemprop="url"><img
                                                            src="{{ asset('uploads/product/'.$val['file_name1']) }}"
                                                            alt="popular-dish-img1.jpg" itemprop="image"></a>
                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                </div>
                                                <div class="popular-dish-info">
                                                    <h4 itemprop="headline"><a href="/food_details/{{$val['id']}}" title=""
                                                                               itemprop="url">{{$val['pname']}}</a></h4>
                                                    <p itemprop="description">{{$val['description']}}</p>
                                                    <span class="price">BDT {{$val['price']}} Taka</span>
                                                    <a class="brd-rd4 " href="/food_details/{{$val['id']}}" title="Order Now"
                                                       itemprop="url">Order Now</a>
                                                    <div class="restaurant-info">
                                                        <img src="{{'assets/'}}assets/images/resource/restaurant-logo1.png"
                                                             alt="restaurant-logo1.png" itemprop="image">
                                                        <div class="restaurant-info-inner">
                                                            <h6 itemprop="headline"><a href="restaurant-detail.html"
                                                                                       title="" itemprop="url">Fabio al
                                                                    Porto Ristorante</a></h6>
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Popular Dish Box -->
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="pagination-wrapper text-center">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREVIOUS</a>
                                    </li>
                                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a>
                                    </li>
                                    <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a>
                                    </li>
                                    <li class="page-item">........</li>
                                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a>
                                    </li>
                                    <li class="page-item next"><a class="page-link brd-rd2" href="#"
                                                                  itemprop="url">NEXT</a></li>
                                </ul>
                            </div><!-- Pagination Wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
