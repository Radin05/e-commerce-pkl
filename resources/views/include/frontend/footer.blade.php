 <footer class="footer footer-2">
            <div class="icon-boxes-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Gratis Ongkir</h3><!-- End .icon-box-title -->
                                    <p>Belanja lebih dari 100rb</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Pengembalian Gratis</h3><!-- End .icon-box-title -->
                                    <p>Sebelum 30hari</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Dapat 20% diskon</h3><!-- End .icon-box-title -->
                                    <p>ketika membeli 2 barang</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Kami Support</h3><!-- End .icon-box-title -->
                                    <p>24/7 Pelayanan Kami</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->

        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-12 col-lg-6">
	            			<div class="widget widget-about">
	            				<img src="{{asset('frontend/assets/images/demos/demo-2/SentuhanSeni.png')}}" class="footer-logo" alt="Footer Logo" width="150" height="25">
	            				<p>"Toko kerajinan tangan kami menawarkan produk unik, berkualitas tinggi, buatan tangan lokal dengan sentuhan kreatif dan penuh cinta."</p>

	            				<div class="widget-about-info">
	            					<div class="row">
	            						<div class="col-sm-6 col-md-4">
	            							<span class="widget-about-title">Ada Pertanyaan? Hubungi</span>
	            							<a href="tel:123456789">+0123 456 789</a>
	            						</div><!-- End .col-sm-6 -->
	            						<div class="col-sm-6 col-md-8">
	            							<span class="widget-about-title">Pembayaran Mendatang</span>
	            							<figure class="footer-payments">
							        			<img src="{{asset('frontend/assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
							        		</figure><!-- End .footer-payments -->
	            						</div><!-- End .col-sm-6 -->
	            					</div><!-- End .row -->
	            				</div><!-- End .widget-about-info -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-12 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">Informasi</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="{{url('about')}}">About SS</a></li>
	            					<li><a href="{{url('produk')}}">Produk</a></li>
	            					<li><a href="{{url('/')}}">Home</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-4 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">Anggota Kelompok</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Iyas</a></li>
	            					<li><a href="#">Hasby</a></li>
	            					<li><a href="#">Saliman</a></li>
	            					<li><a href="#">Hardy</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-4 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">Akun ku</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					@if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
	            					<li><a href="{{url('keranjang')}}">Keranjang</a></li>
	            					<li><a href="#">Riwayat Beli</a></li>
	            					<li><a href="{{ route('logout') }}" type="button"
      onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-64 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        {{-- <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<ul class="footer-menu">
	        			<li><a href="#">Terms Of Use</a></li>
	        			<li><a href="#">Privacy Policy</a></li>
	        		</ul><!-- End .footer-menu -->

	        		<div class="social-icons social-icons-color">
	        			<span class="social-label">Social Media</span>
    					<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
    					<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
    					<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
    					<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
    					<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
    				</div><!-- End .soial-icons -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom --> --}}
        </footer><!-- End .footer -->
