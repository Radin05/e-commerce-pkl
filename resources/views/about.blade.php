@extends('layouts.frontend')

@section('usercontent')
<div class="page-wrapper">

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('frontend/assets/images/about-header-bg.jpg')">
        			<h1 class="page-title text-white">About us<span class="text-white">Siapa kita</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <h2 class="title">Visi Kami</h2><!-- End .title -->
                            <p>Menjadi toko kerajinan tangan terkemuka yang menginspirasi kreativitas dan mendukung pengrajin lokal, dengan menyediakan produk berkualitas tinggi yang unik dan ramah lingkung</p>
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6">
                            <h2 class="title">Misi Kami</h2><!-- End .title -->
                            <p>Misi kami adalah menyediakan kerajinan tangan berkualitas tinggi, mendukung pengrajin lokal, menginspirasi kreativitas, mengutamakan bahan ramah lingkungan, dan memberikan pelayanan pelanggan yang unggul. </p>
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->

                    <div class="mb-5"></div><!-- End .mb-4 -->
                </div><!-- End .container -->

                <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 mb-3 mb-lg-0">
                                <h2 class="title">Tentang Kita</h2><!-- End .title -->
                                <p class="lead text-primary mb-3">
Toko kerajinan tangan, <br>produk unik, berkualitas, ramah lingkungan.
</p><!-- End .lead text-primary -->
                                <p class="mb-2">Kami adalah toko kerajinan tangan yang menyediakan produk unik dan berkualitas tinggi, mendukung pengrajin lokal, dan ramah lingkungan. </p>

                                <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                                    <span>VIEW OUR NEWS</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .col-lg-5 -->

                            <div class="col-lg-6 offset-lg-1">
                                <div class="about-images">
                                    <img src="{{asset('frontend/assets/images/about/img-1.jpg')}}" alt="" class="about-img-front">
                                    <img src="{{asset('frontend/assets/images/about/img-2.jpg')}}" alt="" class="about-img-back">
                                </div><!-- End .about-images -->
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-6 pb-6 -->

                <div class="mb-2"></div><!-- End .mb-2 -->

                <div class="about-testimonials bg-light-2 pt-6 pb-6">
                    <div class="container">
                        <h2 class="title text-center mb-3">Apa yang <i>Customer</i> bilang tentang kami</h2><!-- End .title text-center -->

                        <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "1200": {
                                        "nav": true
                                    }
                                }
                            }'>
                            <blockquote class="testimonial text-center">
                                <img src="{{asset('frontend/assets/images/testimonials/user-1.jpg')}}" alt="user">
                                <p>“Produk kerajinan tangan di toko ini sangat unik dan berkualitas tinggi. Saya sangat puas dengan pelayanan ramah dan dukungan terhadap pengrajin lokal. Pasti akan kembali lagi!"</p>
                                <cite>
                                    Bang Messi
                                    <span>Customer</span>
                                </cite>
                            </blockquote><!-- End .testimonial -->

                            <blockquote class="testimonial text-center">
                                <img src="{{asset('frontend/assets/images/testimonials/user-2.jpg')}}" alt="user">
                                <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque dolores magni recusandae! Doloremque quidem error eum quis similique doloribus natus qui ut ipsum.Velit quos ipsa exercitationem, vel unde obcaecati impedit eveniet non. ”</p>

                                <cite>
                                    Victoria Ventura
                                    <span>Customer</span>
                                </cite>
                            </blockquote><!-- End .testimonial -->
                        </div><!-- End .testimonials-slider owl-carousel -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-5 pb-6 -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
    </div><!-- End .page-wrapper -->
@endsection
