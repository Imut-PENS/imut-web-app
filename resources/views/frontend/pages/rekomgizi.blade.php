@extends('frontend.layout')
@section('content')
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
			<li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Rekomendasi Gizi </li>
			</ul>
		</div>
</div>
<div class="container mediaprofile">
    <div class="col-md-12 col-lg-12">
        <h3>{{ $rekomgizi->feature }}</h3><br>
        <p>{{!! $rekomgizi->content !!}}</p>
    </div>
</div>
@endsection