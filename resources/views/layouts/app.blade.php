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
								<a class="banner_btn" href="#">Hubungi Kami</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="home_right_box">

								<div class="home_item">
									<i class="flaticon-sofa"></i>
								</div>
								<div class="home_item">
									<i class="flaticon-bed"></i>
								</div>
								<div class="home_item">
									<i class="flaticon-computer"></i>
								</div>
								<div class="home_item">
									<i class="flaticon-mirror"></i>
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
        					<h6>Apa itu Bird's Nest?</h6>
        					<h3>Tentang Bird'Nest <br />by Dundee</h3>
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
        					<a class="banner_btn" href="#">Hubungi Kami</a>
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
        					<h4><i class="lnr lnr-user"></i>Sumber Asam Amino Esensial</h4>
        					<p>Berguna untuk regenerasi sel, impuls saraf, meningkatkan kinerja memori,
                                mempercepat pemulihan setelah sakit, dll.
                            </p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-license"></i>Mendukung Fungsi Organ Tubuh</h4>
        					<p>Organ tubuh itu sangat mempengaruhi kesehatan kita, dengan mengkonsumsi
                                Bird's Nest dapat mendukung kinerja organ tubuh kita.
                            </p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-phone"></i>Mencegah resistensi insulin</h4>
        					<p>Resistensi insulin merupakan kondisi ketika sel-sel tubuh tidak dapat menggunakan gula darah dengan baik
                                 karena terganggunya respon sel tubuh.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-rocket"></i>Menurunkan risiko penyakit kardiovaskular</h4>
        					<p>Penyakit kardiovaskular adalah suatu kondisi di mana terdapat adanya gangguan pada jantung dan pembuluh darah.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-diamond"></i>Meredakan Peradangan</h4>
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
					<a class="banner_btn" href="#">Hubungi kami</a>
        		</div>
        	</div>
        </section>
        <!--================End Impress Area =================-->

        <!--================Our Blog Area =================-->
        <section class="our_blog_area p_120" style="background: #ffecec">
        	<div class="container">
        		<div class="main_title">
        			<h2>Galeri</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        		</div>
        		<div class="blog_inner row">
        			<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid" src="{{ asset('assets/images/image1.jpeg') }}" alt="">
        					</div>
        					<div class="blog_text">
        						<div class="blog_cat">
        							<a class="active" href="#">Travel</a>
        							<a href="#">Life style</a>
        						</div>
        						<a href="#"><h4>Low Cost Advertising</h4></a>
        						<p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you A farmer.</p>
        						<a class="date" href="#">31st January, 2018</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid" src="{{ asset('assets/images/image2.jpeg') }}" alt="">
        					</div>
        					<div class="blog_text">
        						<div class="blog_cat">
        							<a class="active" href="#">Travel</a>
        							<a href="#">Life style</a>
        						</div>
        						<a href="#"><h4>Low Cost Advertising</h4></a>
        						<p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you A farmer.</p>
        						<a class="date" href="#">31st January, 2018</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid" src="{{ asset('assets/images/image4.jpeg') }}" alt="">
        					</div>
        					<div class="blog_text">
        						<div class="blog_cat">
        							<a class="active" href="#">Travel</a>
        							<a href="#">Life style</a>
        						</div>
        						<a href="#"><h4>Low Cost Advertising</h4></a>
        						<p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you A farmer.</p>
        						<a class="date" href="#">31st January, 2018</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Our Blog Area =================-->

        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="main_title">
        			<h2>Kontak</h2>
        			<p>Terima kasih sudah menghubungi kami</p>
        		</div>
                <div id="mapBox" class="mapBox"
                    data-lat="40.701083"
                    data-lon="-74.1522848"
                    data-zoom="13"
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>California, United States</h6>
                                <p>Santa monica bullevard</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">00 (440) 9865 562</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@colorlib.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->

        <!--================Clients Logo Area =================-->
        <section class="clients_logo_area p_120">
        	<div class="container">
        		<div class="clients_slider owl-carousel">
        			<div class="item">
        				<img src="{{ asset('assets/img/clients-logo/c-logo-1.png') }}" alt="">
        			</div>
        			<div class="item">
        				<img src="{{ asset('assets/img/clients-logo/c-logo-2.png') }}" alt="">
        			</div>
        			<div class="item">
        				<img src="{{ asset('assets/img/clients-logo/c-logo-3.png') }}" alt="">
        			</div>
        			<div class="item">
        				<img src="{{ asset('assets/img/clients-logo/c-logo-4.png') }}" alt="">
        			</div>
        			<div class="item">
        				<img src="{{ asset('assets/img/clients-logo/c-logo-5.png') }}" alt="">
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Clients Logo Area =================-->

        <!--================Footer Area =================-->
        @include('components.footer')
        <!--================End Footer Area =================-->

        <!-- Scripts -->
        @include('components.scripts')
        <!-- End Scripts -->

    </body>
</html>
