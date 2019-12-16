@extends("customerview.master")
@section("content")

    <section>
        <div class="block">
            <div class="fixed-bg" style="background-image: url({{'assets/'}}assets/images/topbg.jpg);"></div>
            <div class="page-title-wrapper text-center">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="page-title-inner">
                        <h1 itemprop="headline">Food Blog </h1>
                        <span>Our Product, Our Identity </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                <li class="breadcrumb-item active">Blog Grid With Left Sidebar</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-box">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="sidebar left">
                                    <div class="widget style2 popular_posts wow fadeIn" data-wow-delay="0.2s">
                                        <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Popular Posts</h4>
                                        <div class="widget-data">
                                            <div class="mini-posts-list">
                                                <div class="mini-post-item">
                                                    <a href="blog-detail-right-sidebar.html" title=""
                                                       itemprop="url"><img class="brd-rd2"
                                                                           src="{{'assets/'}}assets/images/resource/popular-post-img1.jpg"
                                                                           alt="popular-post-img1.jpg" itemprop="image"></a>
                                                    <div class="mini-post-info">
                                                        <h5 itemprop="headline"><a href="blog-detail-right-sidebar.html"
                                                                                   title="" itemprop="url">Food Tech</a>
                                                        </h5>
                                                        <span class="mini-post-data"><i class="fa fa-clock-o"></i> August 10, 2017</span>
                                                    </div>
                                                </div>
                                                <div class="mini-post-item">
                                                    <a href="blog-left.blade.php" title="" itemprop="url"><img
                                                            class="brd-rd2"
                                                            src="{{'assets/'}}assets/images/resource/popular-post-img2.jpg"
                                                            alt="popular-post-img2.jpg" itemprop="image"></a>
                                                    <div class="mini-post-info">
                                                        <h5 itemprop="headline"><a href="blog-left.blade.php" title=""
                                                                                   itemprop="url">Food Tech</a></h5>
                                                        <span class="mini-post-data"><i class="fa fa-clock-o"></i> November 12, 2017</span>
                                                    </div>
                                                </div>
                                                <div class="mini-post-item">
                                                    <a href="blogview.blade.php" title="" itemprop="url"><img
                                                            class="brd-rd2"
                                                            src="{{'assets/'}}assets/images/resource/popular-post-img3.jpg"
                                                            alt="popular-post-img3.jpg" itemprop="image"></a>
                                                    <div class="mini-post-info">
                                                        <h5 itemprop="headline"><a href="blogview.blade.php" title=""
                                                                                   itemprop="url">Food Tech</a></h5>
                                                        <span class="mini-post-data"><i class="fa fa-clock-o"></i> May 15, 2017</span>
                                                    </div>
                                                </div>
                                                <div class="mini-post-item">
                                                    <a href="blog-detail-right-sidebar.html" title=""
                                                       itemprop="url"><img class="brd-rd2"
                                                                           src="{{'assets/'}}assets/images/resource/popular-post-img4.jpg"
                                                                           alt="popular-post-img4.jpg" itemprop="image"></a>
                                                    <div class="mini-post-info">
                                                        <h5 itemprop="headline"><a href="blog-detail-right-sidebar.html"
                                                                                   title="" itemprop="url">Food Tech</a>
                                                        </h5>
                                                        <span class="mini-post-data"><i class="fa fa-clock-o"></i> March 20, 2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!--Sidebar -->
                            </div>


@foreach($value as $val)
                                <div class="col-md-9 col-sm-12 col-lg-9">
                                    <div class="remove-ext">
                                        <div class="row">

                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="news-box wow fadeIn" data-wow-delay="0.1s">
                                                    <div class="news-thumb">
                                                        <a class="brd-rd2" href="blog-detail-right-sidebar.html" title=""
                                                           itemprop="url"><img
                                                                src="{{ asset('uploads/blogs/'.$val['image']) }}"
                                                                alt="news-img2-1.jpg" itemprop="image"></a>
                                                        <div class="news-btns">
                                                            <a class="post-date red-bg" href="#" title="" itemprop="url">JUNE
                                                                14</a>
                                                            <a class="read-more" href="/blogview/{{$val['id']}}"
                                                               itemprop="url">READ MORE</a>
                                                        </div>
                                                    </div>
                                                    <div class="news-info">
                                                        <h4 itemprop="headline"><a href="/blogview/{{$val['id']}}"
                                                                                 title="" itemprop="url">  {{$val['title']}} </a></h4>
                                                        <p itemprop="description">

{{$val['description']}}






                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    @endforeach

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
                                            <li class="page-item"><a class="page-link brd-rd2" href="#"
                                                                     itemprop="url">18</a></li>
                                            <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a>
                                            </li>
                                        </ul>
                                    </div><!-- Pagination Wrapper -->
                                </div>



                        </div>
                    </div><!-- Section Box -->
                </div>
            </div>
        </div>
    </section>
@endsection
