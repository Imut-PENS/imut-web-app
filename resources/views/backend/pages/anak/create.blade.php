@extends('backend.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-header">
                    <div class="panel-title">
                        <h3>Tambah Anak</h3>
                    </div>
                </div>
                <div class="panel-body">
                <form class="form-horizontal" method="post" action="/backend/pages/user/{{$user->id}}/view" enctype="multipart/form-data">
                    @csrf 
				
                    
						{{-- <div class="demo-grid"> --}}
        
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Nama Anak</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_anak">
                                            </div>    
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Umur</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="umur">
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Tinggi Badan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="tinggi_badan">
                                        </div>
                                </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Berat Badan</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="berat_badan">
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Lingkar Kepala</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lingkar_kepala">
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Foto Anak</label>
                                        <div class="col-sm-2" style="margin-top: 10px">
                                                <input type="file" class="form-control-file" name="foto_anak">      
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success">BUAT</button>
                                    <a href="/backend/pages/user" class="btn btn-warning">KEMBALI</a>
                                    <input type="hidden" name="_method" value="post"> 
                                    {{-- </div> --}}
                                </form>
						
                </div>
            </div>
        </div>
    </div>
@endsection