@extends('layouts.frontend')

@section('usercontent')
  <div class="page-wrapper">

        <main class="main">
            <div class="intro-slider-container">
                <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
                    <div class="intro-slide" style="background-image: url(/frontend/assets/images/demos/demo-2/slider/slide-1.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Kreativitas Terbaik</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Find Comfort <br>That Suits You.</h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(/frontend/assets/images/demos/demo-2/slider/slide-2.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Ypperlig <br>Coffee Table <br><span class="text-primary"><sup>$</sup>49,99</span></h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(/frontend/assets/images/demos/demo-2/slider/slide-3.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Ruang Tamu</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">
                                Membuat Ruang Tamu Anda<br>Bekerja untuk Anda
.<br>
                                <span class="text-primary">
                                    <sup class="text-white font-weight-light">from</sup><sup>Rp.</sup>1000
                                </span>
                            </h1><!-- End .intro-title -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .owl-carousel owl-simple -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

            <div class="banner-group">
                <div class="container">



                    <div class="row">
                         @foreach ($kategori as $item)
                        <div class="col-md-10 col-lg-4">
                            <div class="banner banner-large banner-overlay banner-overlay-light">
                                <a href="#">
                                    <img src="{{asset('/images/kategori/' . $item->gambar_kategori)}}" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle">{{$item->keterangan}}</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">{{$item->nama_kategori}}</h3><!-- End .banner-title -->
                                    <div class="banner-text">from $19.99</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div>
                          @endforeach<!-- End .col-lg-5 -->
                    </div>
                  <!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banner-group -->

            <div class="mb-3"></div><!-- End .mb-6 -->

            <div class="container">
                <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Produk Terbaik</a>
                    </li>
                </ul>
            </div><!-- End .container -->

            <div class="container-fluid">
                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                            @foreach ($produk as $item)


                            <div class="product product-11">
                                <figure class="product-media">
                                    <a href="{{route('detail', ['id' => $item->id])}}">
                                        <img src="{{ asset('/images/produk/' . $item->gambar_produk) }}" alt="Product image" class="product-image">
                                    </a>


                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->


                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">{{$item->nama_produk}}</a></h3>
                                    <div>
                                       Stok: {{$item->stok}}
                                    </div><!-- End .product-title -->
                                    <div class="product-price">
                                        Rp. {{$item->harga}}
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div>
                            @endforeach<!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
            </div><!-- End .container-fluid -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="bg-light deal-container pt-5 pb-3 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="deal">
                                <div class="deal-content">
                                    <h4>Jumlah Terbatas!</h4>
                                    <h2>Hanya hari ini</h2>

                                    <h3 class="product-title"><a href="product.html">Kursi Santai</a></h3><!-- End .product-title -->

                                    <div class="product-price">
                                        <span class="new-price">Rp. 10000</span>
                                        <span class="old-price">Rp. 50000</span>
                                    </div><!-- End .product-price -->

                                    <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->

                                    <a href="product.html" class="btn btn-primary">
                                        <span>Beli Sekarang</span><i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .deal-content -->
                                <div class="deal-image">
                                    <a href="product.html">
                                        <img src="{{asset('frontend/assets/images/demos/demo-2/deal/product-1.jpg')}}" alt="image">
                                    </a>
                                </div><!-- End .deal-image -->
                            </div><!-- End .deal -->
                        </div><!-- End .col-lg-9 -->

                        <div class="col-lg-3">
                            <div class="banner banner-overlay banner-overlay-light text-center d-none d-lg-block">
                                <a href="#">
                                    <img src="{{asset('frontend/assets/images/demos/demo-2/banners/banner-5.jpg')}}" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top banner-content-center">
                                    <h4 class="banner-subtitle">Pilihan Terbaik!</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Kursi Sakti</h3><!-- End .banner-title -->
                                    <div class="banner-text text-primary">Rp. 40000</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Beli Sekarang<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container">
                <hr class="mt-1 mb-6">
            </div><!-- End .container -->

            <div class="blog-posts">
                <div class="container">
                    <h2 class="title text-center">Kunjungi Blog Kita</h2><!-- End .title-lg text-center -->

                    <div class="owl-carousel owl-simple carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                }
                            }
                        }'>
                        <article class="entry entry-display">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo-2/blog/post-1.jpg')}}" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Sed adipiscing ornare.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Continue Reading</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry entry-display">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo-2/blog/post-2.jpg')}}" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 12, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Fusce lacinia arcuet nulla.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Continue Reading</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry entry-display">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo-2/blog/post-3.jpg')}}" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 19, 2018</a>, 2 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Quisque volutpat mattis eros.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Continue Reading</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .owl-carousel -->

                    <div class="more-container text-center mt-2">
                        <a href="blog.html" class="btn btn-outline-darker btn-more"><span>View more articles</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .more-container -->
                </div><!-- End .container -->
            </div><!-- End .blog-posts -->
        </main><!-- End .main -->


    </div><!-- End .page-wrapper -->
@endsection
