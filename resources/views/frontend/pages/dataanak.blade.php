@extends('frontend.layout')
@section('content')
<!--/banner_info-->

	<div class="services1-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Data Anak</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
    <!-- /inner_content -->
<div class="banner_bottom">
    <div class="container">
        <div class="col-md-12 col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h1>Data Anak</h1> <br>
                <a href="{{url('/front/tambahanak/'.$user->id)}}"><button class="btn btn-primary">Tambahkan Data Anak</button></a>  
            </div>
            @if ($user->get_anak()->count() == 0)
            <div class="panel-body">
                <h2>Anda Belum mempunyai data anak</h2> <br>
            
            </div>
            @else
            <div class="panel-body">
            @foreach ($user->get_anak as $item)
            <div class="col-md-3 col-lg-3 dataanak">
                <div class="thumbnail">
                <a href="/front/detailanak/{{ $item->id }}"><img class="imganak" src="/img/{{$item->foto_anak}}" alt=""></a>
                <div class="card-body">
                    <p></p>
                <p class="card-text">{{ $item->nama_anak }}</p>Tanggal Lahir : <p>{{ $item->tanggal_lahir }}</p> Jenis Kelamin:<p>{{ $item->jenis_kelamin }}</p>
                </div>
                
                </div>
            </div>
            @endforeach
            </div>
            @endif
        </div>
        </div>
    </div>
</div>
@endsection