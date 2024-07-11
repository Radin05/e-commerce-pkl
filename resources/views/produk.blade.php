 @extends('layouts.frontend')

 @section('usercontent')
     @php
         $produk = \App\Models\Produk::orderBy('id', 'desc')->get();
     @endphp
     <div class="page-header text-center" style="background-image: url('/frontend/assets/images/page-header-bg.jpg')">
         <div class="container">
             <h1 class="page-title">Cari Produk<span>Produk</span></h1>
         </div><!-- End .container -->
     </div>
     <div class="container-fluid">
         <div class="tab-content tab-content-carousel">
             <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel"
                 aria-labelledby="products-featured-link">
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
                         <div class="product product-11 text-start mt-5">
                             <figure class="product-media">
                                 <a href="{{route('detail', ['id' => $item->id])}}">
                                     <img src="{{ asset('/images/produk/' . $item->gambar_produk) }}" alt="Product image"
                                         class="product-image">

                                 </a>

                                 <div class="product-action-vertical">
                                     <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                             wishlist</span></a>
                                 </div><!-- End .product-action-vertical -->
                             </figure><!-- End .product-media -->

                             <div class="product-body">
                                 <h3 class="product-title"><a href="product.html">{{ $item->nama_produk }}</a></h3>
                                 <!-- End .product-title -->
                                 <div class="product-price">
                                     Rp. {{ number_format($item->harga, 0, ',', '.') }}</del>
                                 </div><!-- End .product-price -->
                             </div><!-- End .product-body -->
                             {{-- <form action="{{ route('keranjang.add', $produk->id) }}" method="POST">
                                 @csrf
                                 <input type="hidden" name="id_produk" value="{{ $item->id }}">
                                 <input type="hidden" name="jumlah" value="1">
                                 <!-- Jumlah produk bisa disesuaikan -->
                                 <button type="submit" class="product-btn">Add To Cart</button>
                             </form><!-- End .product-action --> --}}
                         </div>
                     @endforeach
                     <!-- End .product -->
                 </div><!-- End .owl-carousel -->
             </div><!-- .End .tab-pane -->
             <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
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
                 </div><!-- End .owl-carousel -->
             </div><!-- .End .tab-pane -->
             <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
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
                     <div class="product product-11 text-center">
                         <figure class="product-media">
                             <a href="product.html">
                                 <img src="assets/images/demos/demo-2/products/product-2-1.jpg" alt="Product image"
                                     class="product-image">
                                 <img src="assets/images/demos/demo-2/products/product-2-2.jpg" alt="Product image"
                                     class="product-image-hover">
                             </a>

                             <div class="product-action-vertical">
                                 <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                             </div><!-- End .product-action-vertical -->
                         </figure><!-- End .product-media -->

                         <div class="product-body">
                             <h3 class="product-title"><a href="product.html">Octo 4240</a></h3>
                             <!-- End .product-title -->
                             <div class="product-price">
                                 $746,00
                             </div><!-- End .product-price -->

                             <div class="product-nav product-nav-dots">
                                 <a href="#" class="active" style="background: #1f1e18;"><span
                                         class="sr-only">Color name</span></a>
                                 <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                         name</span></a>
                             </div><!-- End .product-nav -->
                         </div><!-- End .product-body -->
                         <div class="product-action">
                             <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                         </div><!-- End .product-action -->
                     </div><!-- End .product -->

                     <div class="product product-11 text-center">
                         <figure class="product-media">
                             <span class="product-label label-circle label-new">New</span>
                             <a href="product.html">
                                 <img src="assets/images/demos/demo-2/products/product-3-1.jpg" alt="Product image"
                                     class="product-image">
                                 <img src="assets/images/demos/demo-2/products/product-3-2.jpg" alt="Product image"
                                     class="product-image-hover">
                             </a>

                             <div class="product-action-vertical">
                                 <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                             </div><!-- End .product-action-vertical -->

                         </figure><!-- End .product-media -->

                         <div class="product-body">
                             <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3>
                             <!-- End .product-title -->
                             <div class="product-price">
                                 $970,00
                             </div><!-- End .product-price -->
                         </div><!-- End .product-body -->
                         <div class="product-action">
                             <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                         </div><!-- End .product-action -->
                     </div><!-- End .product -->

                     <div class="product product-11 text-center">
                         <figure class="product-media">
                             <span class="product-label label-circle label-sale">Sale</span>
                             <a href="product.html">
                                 <img src="assets/images/demos/demo-2/products/product-4-1.jpg" alt="Product image"
                                     class="product-image">
                                 <img src="assets/images/demos/demo-2/products/product-4-2.jpg" alt="Product image"
                                     class="product-image-hover">
                             </a>

                             <div class="product-action-vertical">
                                 <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                             </div><!-- End .product-action-vertical -->

                         </figure><!-- End .product-media -->

                         <div class="product-body">
                             <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3>
                             <!-- End .product-title -->
                             <div class="product-price">
                                 <span class="new-price">$337,00</span>
                                 <span class="old-price">Was $449,00</span>
                             </div><!-- End .product-price -->

                             <div class="product-nav product-nav-dots">
                                 <a href="#" class="active" style="background: #878883;"><span
                                         class="sr-only">Color name</span></a>
                                 <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color
                                         name</span></a>
                             </div><!-- End .product-nav -->
                         </div><!-- End .product-body -->
                         <div class="product-action">
                             <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                         </div><!-- End .product-action -->
                     </div><!-- End .product -->
                 </div><!-- End .owl-carousel -->
             </div><!-- .End .tab-pane -->
         </div><!-- End .tab-content -->
     </div>
 @endsection
