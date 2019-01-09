@extends('frontend.layout')
@section('content')
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
            <li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
            <li><a href="{{url('/front/artikel')}}">Artikel</a><span>|</span></li>
				<li>Detail Artikel</li>
			</ul>
		</div>
</div>
<div class="banner_bottom">
		<div class="container">
			<div class="col-md-9 technology-left">
				<div class="business">
					<div class=" blog-grid2">
						<div class="blog-text">
                            <h3>{{ $info->judul}}</h3><br>
                            <div class="artikelspan">Kategori:</div><h5>{{ $info->kategori['kat_info']}}</h5><br>
                            <div class="artikelspan">Added date:</div><p>{{ $info->created_at}}</p><br>

                            {!! $info->content !!}
							
						</div>
					</div>
				</div>
			</div>
			<!-- technology-right -->
			<div class="col-md-3 technology-right-1">
				<div class="blo-top1">
					<div class="tech-btm">
                        <h3>Artikel Terbaru </h3>
                        @foreach($data as $item)
						<div class="blog-grids">
							<div class="sideartikel">
                           
                               <a href="{{ url('/front/artikel/'.$item->id) }}"><h4>{{ $item->judul }}</h4></a>
                                
							
							</div>
							<div class="clearfix"> </div>
                        </div>
                        @endforeach
					</div>
				</div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection