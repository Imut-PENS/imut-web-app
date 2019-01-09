@extends('frontend.layout')
@section('content')

	<div class="services1-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
                <li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Grafik Pertumbuhan</li>
			</ul>
		</div>
</div>
<div class="container mediaprofile" id="app">
    <h3>Grafik Pertumbuhan Anak</h3><br>
    
    <div class="col-md-4 col-lg-4 grafik">
        <h4>Grafik Tinggi Badan berdasarkan Usia</h4><br>
        <frontgrowth-component></frontgrowth-component>
    </div>
    <div class="col-md-4 col-lg-4 grafik">
        <h4>Grafik Berat Badan berdasarkan Usia</h4>
        <frontweight-component></frontweight-component>
    </div>
    <div class="col-md-4 col-lg-4 grafik">
        <h4>Grafik Lingkar Kepala berdasarkan Usia</h4>
        <fronthead-component></fronthead-component>
    </div>
    <a href="/front/rekomendasigizi"><button class="btn btn-primary">Rekomendasi Gizi</button></a>
    
</div>

<script>
         window.Laravel = <?php echo json_encode([
             'csrfToken' => csrf_token(),
          ]); ?>
   </script>
   <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection