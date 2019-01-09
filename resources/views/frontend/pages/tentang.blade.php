@extends('frontend.layout')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Tentang Kami </li>
			</ul>
		</div>
</div>
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
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="single.html" role="button">Lanjut baca </a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
		</div>
	</div>	
@endsection