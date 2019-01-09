@extends('frontend.layout')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
            <li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
            <li><a href="{{url('/front/layanan')}}">Layanan</a><span>|</span></li>
				<li>Jadwal Imunisasi</li>
			</ul>
		</div>
</div>
  <div class="container mediaprofile">
  <h3>Jadwal Imunisasi</h3>
  <a href="/front/jadwal"><button class="btn btn-primary">Jadwal Menurut Imut</button></a>
  <a href="/front/jadwal/idai"><button class="btn btn-info">Jadwal Menurut IDAI(Ikatan Dokter Anak Indonesia)</button></a><br><br>
    <div class="panel panel-primary">
      <div class="panel-heading">Jadwal Imunisasi</div>
      <div class="panel-body">
        
        {!! $calendar_details->calendar() !!}
      </div>
    </div>
  </div>
  <script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
 {!! $calendar_details->script() !!}
@endsection
