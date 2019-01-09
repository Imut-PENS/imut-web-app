@extends('frontend.layout')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Layanan </li>
			</ul>
		</div>
</div>
<div class="container alllayanan">
    <div class="inner_sec_info_wthree_agile">
				<div class="ser-first">
					<div class="col-md-3 ser-first-grid1 text-center">
						<a href="{{url('/front/jadwal')}}"><span class="fas fa-calendar-alt" aria-hidden="true"></span></a>
						<a href="{{url('/front/jadwal')}}"><h3>Jadwal Imunisasi</h3></a>
						<p>Seringkali sebagai orang tua lupa dan melewatkan imunisasi yang begitu penting bagi anak.</p>
					</div>
					<div class="col-md-3 ser-first-grid1 text-center">
					<a href="{{url('/front/imunisasi')}}"><span class="fas fa-archive" aria-hidden="true"></span></a>
                    <a href="{{url('/front/imunisasi')}}"><h3>Data Imunisasi</h3></a>
						<p>Betapa pentingnya pengetahuan tentang imunisasi bagi ibu untuk kesehatan Anak</p>
					</div>
					<div class="col-md-3 ser-first-grid1 text-center">
					<a href="{{url('/front/grafiktumbuh')}}"><span class="fas fa-chart-bar" aria-hidden="true"></span></a>
                    <a href="{{url('/front/grafiktumbuh')}}"><h3>Grafik Pertumbuhan</h3></a>
						<p>Tahukah anda bahwa tinggi dan berat badan anak anda bermasalah, sekarang anda bisa pantau langsung.</p>
					</div>
					<div class="col-md-3 ser-first-grid1 text-center">
					<a href="{{url('/front/artikel')}}"><span class="far fa-newspaper" aria-hidden="true"></span></a>
                    <a href="{{url('/front/artikel')}}"><h3>Artikel</h3></a>
						<p>Informasi merupakan hal yang penting bagi kesehatan anak, budayakan membaca sebagai orang tua.</p>
                    </div>
                    <div class="col-md-3 ser-first-grid1 text-center">
					<a href="{{url('/front/konsultasi')}}"><span class="fas fa-comments" aria-hidden="true"></span></a>
                    <a href="{{url('/front/konsultasi')}}"><h3>Konsultasi</h3></a>
						<p>Bingung mengenai imunisasi?layanan Konsultasi memberikan kemudahan kepada orangtua untuk bisa berkonsultasi kepada dokter/ pakar kesehatan. </p>
                    </div>
                    <div class="col-md-3 ser-first-grid1 text-center">
					<a href="{{url('/front/rekomendasigizi')}}"><span class="fas fa-gift" aria-hidden="true"></span></a>
                    <a href="{{url('/front/rekomendasigizi')}}"><h3>Rekomendasi Gizi</h3></a>
						<p>Informasi mengenai rekomendasi gizi berdasarkan pertumbuhan Anak.
                    </div>
                    <div class="col-md-3 ser-first-grid1 text-center">
					<a href="{{url('/front/perkembangananak')}}"><span class="fas fa-gift" aria-hidden="true"></span></a>
                    <a href="{{url('/front/perkembangananak')}}"><h3>Tahap Perkembangan Anak</h3></a>
						<p>Informasi mengenai Tahap Perkembangan Anak berdasarkan pertumbuhan Anak.
                    </div>
					<div class="clearfix"></div>
                </div>
              
	</div>
</div>

@endsection