@extends('frontend.layout')
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
				<div class="carousel-caption">
						<h3>Aplikasi Digital Imunisasi</h3>
						<p>Periode sangat penting dalam Imunisasi dan Pertumbuhan anak.<br>
Pantau anak anda melalui aplikasi Imut.</p>
						<div class="top-buttons">
							<div class="bnr-button1">
								<a class="act" href="single.html">Available on <br> Website</a>
							</div>
							<div class="bnr-button1">
								<a class="act" href="single.html">Available on <br> Android</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Imunisasi Terpadu</h3>
						<p>Aplikasi digital imunisasi</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="{{url('/front/tentang')}}">Tentang Kami</a>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!--/ab-->
	@if(Session::has('success'))
		<div class="alert alert-info alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
		{{Session::get('success')}}
		</div>
	@endif
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">Tentang Kami</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">
						<img src="{{ asset('frontend/images/aa.png') }}" alt=" " class="img-responsive">
					</div>
					<div class="col-md-6 banner_bottom_left">
						<h4>Imunisasi Terpadu</h4>
						<p>Merupakan aplikasi digital imunisasi dimana aplikasi bertujuan untuk mempermudah penggunaan ibu pada jaman teknologi sekarang.</p>
						<p>Aplikasi ini tersedia pada dua aplikasi yaitu berbasis website dan android.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="{{url('/front/tentang')}}" role="button">Lanjut baca </a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
		</div>
	</div>
	<!--//ab-->
	<!--/what-->
	<div class="works">
		<div class="container">
			<h3 class="tittle-w3ls cen">Fitur Utama</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="ser-first">
					<div class="col-md-3 ser-first-grid text-center">
						<a href="{{url('/front/jadwal')}}"><span class="fas fa-calendar-alt" aria-hidden="true"></span></a>
						<h3>Jadwal Imunisasi</h3>
						<p>Seringkali sebagai orang tua lupa dan melewatkan imunisasi yang begitu penting bagi anak.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
					<a href="{{url('/front/dataimunisasi')}}"><span class="fas fa-archive" aria-hidden="true"></span></a>
						<h3>Data Imunisasi</h3>
						<p>Betapa pentingnya pengetahuan tentang imunisasi bagi ibu untuk kesehatan Anak</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
					<a href="{{url('/front/grafik')}}"><span class="fas fa-chart-bar" aria-hidden="true"></span></a>
						<h3>Grafik Pertumbuhan</h3>
						<p>Tahukah anda bahwa tinggi dan berat badan anak anda bermasalah, sekarang anda bisa pantau langsung.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
					<a href="{{url('/front/blog')}}"><span class="far fa-newspaper" aria-hidden="true"></span></a>
						<h3>Artikel</h3>
						<p>Informasi merupakan hal yang penting bagi kesehatan anak, budayakan membaca sebagai orang tua.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!--//what-->
	<!--/banner_bottom-->
	
	<!--//banner_bottom-->
	<!--/projects-->
	<div class="banner_bottom proj">
		<div class="wrap_view">
			<h3 class="tittle-w3ls">Imunisasi</h3>
			<div class="inner_sec">
				<ul class="portfolio-area">
					@foreach($imunisasi as $item)
					<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
						<div>
							<span class="image-block img-hover">
							<a class="image-zoom" href="">
							
									<img src="{{ asset('frontend/images/imunisasi.png') }}" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>{{ $item->jenis_imunisasi['jenis_imunisasi'] }}</h5>
											<p>{{ $item->deskripsi }}</p>
										</div>
							</a>
						</span>
						</div>
					</li>
					@endforeach
					<div class="clearfix"></div>
				</ul>
				<!--end portfolio-area -->
				<a href="#"><button class="lihatsemua">Lihat Semua >></button></a>
			</div>

		</div>
	</div>

	<!--//projects-->
	<!--/blog-->
	<div class="blog_sec">
		<h3 class="tittle-w3ls">Latest Blogs</h3>
		<div class="col-md-6 banner-btm-left">
			<div class="banner-btm-top">
				<div class="banner-btm-inner a1">
					<div class="blog_date">

						<h4>{{ $info[1]->created_at}}</h4>

					</div>
					<h6><a href="single.html">{{ $info[1]->judul}}</a></h6>
					<p class="paragraph">{{ $info[1]->judul}}</p>
					<div class="clearfix">{{ $info[1]->kategori['kat_info']}}</div>
					<a href="single.html" class="blog-btn">Lanjut Baca</a>
				</div>
				<div class="banner-btm-inner a2">

				</div>
			</div>
			<div class="banner-btm-bottom">
				<div class="banner-btm-inner a3">

				</div>
				<div class="banner-btm-inner a4">
					<div class="blog_date">

						<h4>{{ $info[2]->created_at}}</h4>

					</div>
					<h6><a href="single.html">{{ $info[2]->judul}}</a></h6>
					<p class="paragraph">{{ $info[2]->katagori['kat_info']}}</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Lanjut Baca</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 banner-btm-left">
			<div class="banner-btm-top">
				<div class="banner-btm-inner a1">
					<div class="blog_date">

						<h4>{{ $info[3]->created_at}}</h4>

					</div>
					<h6><a href="single.html">{{ $info[3]->judul}}</a></h6>
					<p class="paragraph">{{ $info[3]->kategori['kat_info']}}</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Lanjut Baca</a>
				</div>
				<div class="banner-btm-inner a5">

				</div>
			</div>
			<div class="banner-btm-bottom">
				<div class="banner-btm-inner a6">

				</div>
				<div class="banner-btm-inner a4">
					<div class="blog_date">

						<h4>{{ $info[4]->created_at}}</h4>

					</div>
					<h6><a href="single.html">{{ $info[4]->judul}}</a></h6>
					<p class="paragraph">{{ $info[4]->kategori['kat_info']}}</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Lanjut Baca</a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<a href="#"><button class="lihatsemua">Lihat Semua >></button></a>
	</div>

	<!--//blog-->

	<!--/testimonials-->
	<div class="tesimonials">
		<div class="container">
			<h3 class="tittle-w3ls cen">Testimonials</h3>
			<div class="inner_sec">
				<div class="test_grid_sec">
					<div class="col-md-offset-2 col-md-8">
						<div class="carousel slide two" data-ride="carousel" id="quote-carousel">
							<!-- Bottom Carousel Indicators -->
							<ol class="carousel-indicators two">
								<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#quote-carousel" data-slide-to="1"></li>
								<li data-target="#quote-carousel" data-slide-to="2"></li>
							</ol>

							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">

								<!-- Quote 1 -->
								<div class="item active">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="{{ asset('frontend/images/t1.jpg') }}" class="img-responsive" alt="">

											</div>
											<div class="col-sm-9 test_img_info">
												<p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
													auctor nec lacus ut tempor. Mauris.</p>
												<h6>Sara Lisbon</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 2 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="{{ asset('frontend/images/t2.jpg') }}" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>Lorem ipsum dolor sit amet. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
													auctor nec lacus ut tempor. Mauris.</p>
												<h6>Jane Wearne</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 3 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="{{ asset('frontend/images/t3.jpg') }}" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
													auctor nec lacus ut tempor. Mauris.</p>
												<h6>Alice Williams</h6>
											</div>
										</div>
									</blockquote>
								</div>
							</div>

						</div>
					</div>
					<a href="testimoni"><button class="tombol1">Berikan testimoni anda</button></a>
				</div>
			</div>
		</div>
	</div>
	<!--//testimonials-->

	<!-- /newsletter-->
	<div class="newsletter_w3ls_agileits">

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->
    @endsection