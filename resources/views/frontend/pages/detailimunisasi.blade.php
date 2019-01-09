@extends('frontend.layout')
@section('content')
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
            <li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
            <li><a href="{{url('/front/imunisasi')}}">Imunisasi</a><span>|</span></li>
				<li>Detail Imunisasi</li>
			</ul>
		</div>
</div>
<div class="container mediaprofile">
<h3>Data Imunisasi</h3>
    <div class="col-md-6 col-lg-6 imunisasi">
    <img src="{{ asset('frontend/images/g1.jpg') }}" class="img-responsive" alt="Conceit">
    </div>
    
    <div class="col-md-6 col-lg-6">
        <div class="panel">
            <div class="panel-body">
            <p>Jenis Imunisasi :</p><span>{{$imunisasi->jenis_imunisasi['jenis_imunisasi']}}</span> <br>
            <p>Jumlah yang diimunisasikan</p> <span>{{$imunisasi->jumlah_imunisasi}}</span>
            <p>Waktu saat imunisasi</p> <span>{{$imunisasi->waktu_imunisasi}}</span>
            <p>Deskripsi :</p>
            <p>{{$imunisasi->deskripsi}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        @foreach($imun as $item)
        <div class="col-md-3 col-lg-3">
            <div class="thumbnail">
                <a href="/front/detailimunisasi/{{$item->id}}">
                <img src="{{ asset('frontend/images/g1.jpg') }}" class="img-responsive">
                <h5>{{ $item->jenis_imunisasi['jenis_imunisasi'] }}</h5>
                <p>{{ $item->jumlah_imunisasi }}</p>
				<p>{{ $item->waktu_imunisasi }}</p>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection