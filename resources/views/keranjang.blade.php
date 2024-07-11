@extends('layouts.frontend')

@section('usercontent')
 <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-keranjang"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-keranjang"><a href="#">Shop</a></li>
                        <li class="breadcrumb-keranjang active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-lg-9">
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>Product</th>
											<th>Price</th>
											<th>Quantity</th>
											<th>Total</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										<tr>
                                            @foreach ($keranjang as $keranjang)


											<td class="product-col">
												<div class="product">
													<figure class="product-media">
														<a href="#">
														<img src="{{ asset('/images/produk/' . $keranjang->produk->gambar_produk) }}" alt="img">
														</a>
													</figure>

													<h3 class="product-title">
														<a href="#">{{ $keranjang->produk->nama_produk}}</a>
													</h3><!-- End .product-title -->
												</div><!-- End .product -->
											</td>
											<td class="price-col">{{$keranjang->produk->harga}}</td>
											<td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <button class="minus" onclick="updateQuantity(false, {{ $keranjang->id }})">-</button>
                                                    <span id="quantity-number-{{ $keranjang->id }}" class="number">{{ $keranjang->jumlah }}</span>
                                                    <button class="plus" onclick="updateQuantity(true, {{ $keranjang->id }})">+</button>
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
											<td class="total-col">{{$keranjang->harga * $keranjang->jumlah}}</td>
											<td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                                            @endforeach
										</tr>
									</tbody>
								</table><!-- End .table table-wishlist -->
	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>
	                						<tr class="summary-subtotal">
	                							<td>Subtotal:</td>
	                							<td>@currency($harga->total)</td>
	                						</tr><!-- End .summary-subtotal -->
	                						<tr class="summary-total">
	                							<td>Total:</td>
	                							<td>$160.00</td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->

	                				<a href="{{url('checkout')}}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
	                			</div><!-- End .summary -->

		            			<a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        @endsection
