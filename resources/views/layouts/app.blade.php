<!doctype html>
<html lang="en">
    @include('components.head')
    <body>

        <!--================Header Menu Area =================-->
        @include('components.header')
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <section id="home" class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="banner_content">
								<h2 style="color: #faba00">Bird's Nest <br/>by Dundee</h2>
								<p>Minuman Sarang Burung Walet yang alami tanpa bahan pengawet, dan dibuat langsung saat pesan.</p>
								<a class="banner_btn" href="https://wa.me/6281332666688?text=Halo%20kak,%20Apakah%20Bird's%20Nest%20masih%20tersedia%20?">Hubungi Kami</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="home_right_box">

								<div class="home_item">
									<i class="lnr lnr-bullhorn"></i>
								</div>
								<div class="home_item">
									<i class="lnr lnr-store"></i>
								</div>
								<div class="home_item">
									<i class="lnr lnr-coffee-cup"></i>
								</div>
								<div class="home_item">
									<i class="lnr lnr-dinner"></i>
								</div>
								<div class="home_item">
									{{-- <i class="flaticon-closet"></i> --}}
								</div>
								{{-- <div class="home_item">
									<i class="flaticon-kitchen"></i>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================About Area =================-->
        <section id="tentang" style="background: #ffecec" class="about_area p_120">
        	<div class="container">
        		<div class="about_inner row">
        			<div class="col-lg-6">
        				<div class="about_left_text">
        					<h6>Apa itu Bird Nest?</h6>
        					<h3>Tentang Bird Nest <br />by Dundee</h3>
        					<h5>Menu baru yang ada di Restoran Dundee</h5>
        					<p>Bird's Nest merupakan menu baru yang ada di Restoran Dundee yang pembuatannya
                                menggunakan sarang burung walet. Bird's Nest dibuat tanpa bahan pengawet dan juga
                                dibuat langsung saat dipesan.</p>
                                <br/>
                            <p>Sarang burung walet dipercaya dapat meningkatkan daya tahan tubuh, kesehatan paru-paru,
                                memerangi virus influenza, menyembuhkan luka, hingga membuat tulang kuat.
                            </p>
                            <p>Selain untuk kesehatan, sarang burung walet juga bermanfaat untuk kecantikan.</p>
                            <br/>
        					<a class="banner_btn" href="https://wa.me/6281332666688?text=Halo%20kak,%20Apakah%20Bird's%20Nest%20masih%20tersedia%20?">Hubungi Kami</a>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<img class="img-fluid" src="{{ asset('assets/images/1.jpg') }}" alt="">
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End About Area =================-->

        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Manfaat Bird's Nest</h2>
        			<p>Sarang burung walet dipercaya dapat meningkatkan daya tahan tubuh, kesehatan paru-paru,
                        memerangi virus influenza, menyembuhkan luka, hingga membuat tulang kuat.
                        Selain itu masih banyak lagi manfaat yang didapat kalau kita mengkonsumsi minuman Bird's Nest diantaranya:
                    </p>
        		</div>
        		<div class="row feature_inner">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Sumber Asam Amino Esensial</h4>
        					<p>Berguna untuk regenerasi sel, impuls saraf, meningkatkan kinerja memori,
                                mempercepat pemulihan setelah sakit, dll.
                            </p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Mendukung Fungsi Organ Tubuh</h4>
        					<p>Organ tubuh itu sangat mempengaruhi kesehatan kita, dengan mengkonsumsi
                                Bird's Nest dapat mendukung kinerja organ tubuh kita.
                            </p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Mencegah resistensi insulin</h4>
        					<p>Resistensi insulin merupakan kondisi ketika sel-sel tubuh tidak dapat menggunakan gula darah dengan baik
                                 karena terganggunya respon sel tubuh.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Menurunkan risiko penyakit kardiovaskular</h4>
        					<p>Penyakit kardiovaskular adalah suatu kondisi di mana terdapat adanya gangguan pada jantung dan pembuluh darah.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Meredakan Peradangan</h4>
        					<p>Kandungan mangan dalam sarang walet juga berguna untuk mengaktifkan dan memastikan enzim yang berperan dalam membantu meredakan peradangan bekerja dengan baik.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Menyehatkan Kulit</h4>
        					<p>Sarang burung walet juga sering dimanfaatkan sebagai bahan dasar kosmetik. Nutrisi pada sarang walet memiliki komponen antipenuaan yang mendukung regenerasi sel-sel di epidermis, yaitu bagian kulit terluar.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->

        <!--================Impress Area =================-->
        <section class="impress_area p_120">
        	<div class="container">
        		<div class="impress_inner text-center">
					<h2>Bird's Nest <br />By Dundee</h2>
					<p>Sarang burung walet yang baik memiliki tekstur yang renyah dan kenyal setelah direbus</p>
					<a class="banner_btn" href="https://wa.me/6281332666688?text=Halo%20kak,%20Apakah%20Bird's%20Nest%20masih%20tersedia%20?">Hubungi kami</a>
        		</div>
        	</div>
        </section>
        <!--================End Impress Area =================-->

        <!--================Our Blog Area =================-->
        <section id="galeri" class="our_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Galeri</h2>
        		</div>
        		<div class="photo-gallery">
                        <div class="row photos">
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/image1.jpeg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/image1.jpeg') }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/image2.jpeg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/image2.jpeg') }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/image3.jpeg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/image3.jpeg') }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/image4.jpeg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/image4.jpeg') }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/1.jpg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/1.jpg') }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/2.jpg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/2.jpg') }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/3.jpg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/3.jpg') }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/4.jpg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/4.jpg') }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/image6.jpeg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/image6.jpeg') }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('assets/images/image7.jpeg') }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('assets/images/image7.jpeg') }}"></a></div>
                        </div>
                </div>
        	</div>
        </section>
        <!--================End Our Blog Area =================-->

        <!--================Feature Area =================-->
        <section class="feature_area p_120" style="background: #ffecec">
        	<div class="container">
        		<div class="main_title">
        			<h2>Bergabung Dengan Kami</h2>
                    <p>Ingin dapat promo menarik dari kami? Yuk buruan gabung menjadi Reseller kami.</p>
        		</div>
        		<div class="row feature_inner px-3">
                    <div class="feature_item" style="background: #ecf7ff">
                        <h4><i class="lnr lnr-smile"></i>Bergabunglah dengan kami</h4>
                        <p>Dapatkan Promo Menarik Dengan Menjadi Reseller Kami. Caranya gampang cukup Hubungi kami saja lalu
                            kamu akan bisa jadi reseller dan dapat promo dari kami. Ayo join tunggu apalagi!
                        </p>
                        <br/>
                        <a class="banner_btn" href="https://wa.me/6281332666688?text=Halo%20kak,%20Apakah%20Bird's%20Nest%20masih%20tersedia%20?">Hubungi Kami</a>
                    </div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->

        <!--================Contact Area =================-->
        <section id="kontak" class="contact_area p_120">
            <div class="container">
                <div class="main_title">
        			<h2>Kontak</h2>
                    <p>Terima kasih telah menghubungi kami</p>
        		</div>
                <div class="row text-center">
                    <div class="col-lg-4 col-md-12">
                        <div>
                            <svg class="feather feather-map-pin" xmlns="http://www.w3.org/2000/svg" width="50"
                                height="50" viewBox="0 0 24 24" fill="none" stroke="#A40603" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <h4 class="mt-5">Alamat :</h4>
                            <span class="text-black">Jl. Ketintang No.169, Ketintang, Kec. Wonokromo, Kota SBY, Jawa Timur 60231</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div>
                            <svg class="feather feather-mail" xmlns="http://www.w3.org/2000/svg" width="50"
                                height="50" viewBox="0 0 24 24" fill="none" stroke="#A40603" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <h4 class="mt-5">Email Us</h4>
                            <a href="mailto:master.dundee@gmail.com"> master.dundee@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div>
                            <svg class="feather feather-phone-call" xmlns="http://www.w3.org/2000/svg" width="50"
                                height="50" viewBox="0 0 24 24" fill="none" stroke="#A40603" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                            <h4 class="mt-5">Nomor Telp</h4>
                            <a href="https://wa.me/6281332666688?text=Halo%20kak,%20Apakah%20Bird's%20Nest%20masih%20tersedia%20?">+62 813 3266 6688</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->

        <!--================Footer Area =================-->
        @include('components.footer')
        <!--================End Footer Area =================-->

        <!-- Scripts -->
        @include('components.scripts')
        <!-- End Scripts -->

    </body>
</html>
