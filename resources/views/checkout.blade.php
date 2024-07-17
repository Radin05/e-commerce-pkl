 @extends('layouts.frontend')

@section('usercontent')
 <main class="main">
        	<div class="page-header text-center" style="background-image: url('frontend/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Checkout<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			{{-- <div class="checkout-discount">
            				<form action="#">
        						<input type="text" class="form-control" required id="checkout-discount-input">
            					<label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label>
            				</form>
            			</div><!-- End .checkout-discount --> --}}
            			<form action="#">
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Pengiriman dan Pembayaran</h2><!-- End .checkout-title -->
                                    <div class="row">
		                					<div class="col-sm-6">
		                						<label>Nama</label>
		                						<input type="text" class="form-control" required value="Tony Stark">
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>No Telepon</label>
		                						<input type="text" class="form-control" required value="08123123123">
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
	            						<label>Pengiriman</label>
	            						<input type="text" class="form-control" value="Reguler" disabled>

                                        <label>Alamat</label>
	            						<input type="text" class="form-control" value="Bandung, Cibaduyut, TCI">

	                					<label>Catatan</label>
	        							<textarea class="form-control" cols="30" rows="4" placeholder="Anda bisa menulis feedback disini atau catatan untuk kurir"></textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Ringkasan Belanja</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Produk</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
		                						<tr>
		                							<td><a href="#">Beige knitted elastic runner shoes</a></td>
		                							<td>$84.00</td>
		                						</tr>

		                						<tr>
		                							<td><a href="#">Blue utility pinafore denimdress</a></td>
		                							<td>$76,00</td>
		                						</tr>
		                						<tr class="summary-subtotal">
		                							<td>Total Harga Barang:</td>
		                							<td>$160.00</td>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Biaya Transaksi:</td>
		                							<td>Gratis Ongkir</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Total Tagihan:</td>
		                							<td>$160.00</td>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										                    Dana
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            <div class="card-body">
										                fitur ini masih sedang tahap pengembangan, <i>Coming Soon!!!</i>
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-2">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										                    Cash On Delivery
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
										            <div class="card-body">
										                Ini bayar ditempat cash or duel?, dan pembayaran ini hanya tersedia di Bandung dan sekitarnya.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->
										</div><!-- End .accordion -->

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Bayar</span>
		                					<span class="btn-hover-text">Proses Sekarang</span>
		                				</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
@endsection
