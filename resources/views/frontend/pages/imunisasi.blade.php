@extends('frontend.layout')
@section('content')
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Data Imunisasi </li>
			</ul>
		</div>
</div>
<div class="banner_bottom proj">
    <div class="container">
		<div class="wrap_view">
			<h3 class="tittle-w3ls">Data Imunisasi</h3>
			<div class="inner_sec">
				<ul class="portfolio-area">
					@foreach($imunisasi as $item)
					<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
						<div>
							<span class="image-block img-hover">
							<a class="image-zoom" href="/front/detailimunisasi/{{$item->id}}">
							
									<img src="{{ asset('frontend/images/g1.jpg') }}" class="img-responsive" alt="Conceit">
									<div class="port-info">
                                            <h5>{{ $item->jenis_imunisasi['jenis_imunisasi'] }}</h5>
                                            <p>{{ $item->jumlah_imunisasi }}</p>
											<p>{{ $item->waktu_imunisasi }}</p>
										</div>
							</a>
						</span>
						</div>
					</li>
					@endforeach
					<div class="clearfix"></div>
				</ul>
				<!--end portfolio-area -->
			</div>

		</div>
    </div>
</div>
@endsection