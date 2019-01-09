@extends('frontend.layout')
@section('content')

	<div class="services1-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
                <li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
				<li>Tambah Pertumbuhan</li>
			</ul>
		</div>
</div>
<div class="container mediaprofile">
<form method="POST" action="/front/ptumbuh/{{ $anak->id }}"  enctype="multipart/form-data">
@csrf
            
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Pertumbuhan Anak</h3>
                        </div>
                        <div class="panel-body">    
                        <input type="hidden" class="form-control" name="anak_id" value="{{ $anak->id }}" required>
                            <div class="form-group">
                                <label for="" class="control-label">Tinggi Badan</label>
                                    
                                    <input type="text" class="form-control" name="tinggi_badan" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Berat Badan</label>
                                    
                                    <input type="text" class="form-control" name="berat_badan" required>
                                    
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Lingkar Kepala</label>
                                    
                                    <input type="text" class="form-control" name="lingkar_kepala" required>
                                    
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Usia Anak</label>
                                    <input type="text" class="form-control" name="usia" required>
                            </div>
							<div class="form-group">
                                <label for="" class="control-label">Tanggal</label>
                                    
                                    <input type="date" class="form-control" name="tanggal" required>
                                    
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">TAMBAH</button>
                            <a href="/backend" class="btn btn-danger">KEMBALI</a>
                            <input type="hidden" name="_method" value="post">                 
                        </div>
                    </div>
            
    </form>
    </div>
@endsection