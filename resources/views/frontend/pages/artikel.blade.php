@extends('frontend.layout')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Blog</li>
			</ul>
		</div>
</div>
	<!--//banner_info-->
    <!-- /inner_content -->
<div class="container mediaartikel">
    @foreach($info as $item)
    <div class="col-md-6 col-lg-6">
        <ul class="media-list">
            <li class="media">
                <a href="{{ url('/front/artikel/'.$item->id) }}" class="pull-left artikel">
                    <img class="img-responsive" src="{{ asset('frontend/images/g1.jpg') }}" alt="">
                </a>
                <div class="media-body">
                    <h3 class="media-heading">
                        <a href="{{ url('/front/artikel/'.$item->id) }}">{{ $item->judul }}</a>
                    </h3>
                    <div class="artispan">Kategori:</div>
                    <h4>{{ $item->kategori['kat_info'] }}</h4>
                    <footer> <p>{{ $item->created_at }}</p></footer>
                   
                </div>
            </li>
        </ul>
    </div>
    @endforeach
</div>
@endsection