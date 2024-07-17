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
                 </div><!-- End .owl-carousel -->
             </div><!-- .End .tab-pane -->
         </div><!-- End .tab-content -->
     </div>
 @endsection
