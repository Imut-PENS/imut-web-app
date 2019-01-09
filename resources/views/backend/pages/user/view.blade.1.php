@extends('backend.master')

@section('content')

<div class="page-content container-fluid">
<div class="row">
  <div class="col-lg-4">
    <!-- Panel Basic -->
    <div class="panel panel1">
      <div class="panel-body">
      <img style="border-radius: 5px; width: 200px" src="{{ url('img/'.$user->foto) }}" alt="">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-2" style="margin-top: 10px">
                                    {{$user->foto}}      
                            </div>
                        </div>
      </div>
    </div>
    <!-- End Panel Basic -->
  </div>

  <div class="col-lg-8">
    <!-- Panel Extended -->
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data User</h3>
      </div>
      <div class="panel-body">
      <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" value="{{$user->name}}" disabled>
                                            </div>    
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email" value="{{$user->email}}" disabled>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="alamat" value="{{$user->alamat}}" disabled>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">No Telepon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="notelp" value="{{$user->notelp}}" disabled>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Role</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="notelp" value="{{$user->role}}" disabled>
                                            </div>
                                    </div>
                                    <a href="/backend" class="btn btn-primary">Back</a>
                                    <input type="hidden" name="_method" value="put"> 
      </div>
    </div>
    <!-- End Panel Extended -->
  </div>
</div>
<div class="row">
<div class="col-md-12">
    <div class="panel"> 
        
        @if ($user->get_anak()->count() == 0)
        <div class="panel-header">
        <h3 class="panel-title">Anda belum mempunyai data anak</h3>
         </div>  
        @else
         <div class="panel-header">
         <h3 class="panel-title">Data Anak</h3>
         </div>
            <div class="panel-body">
            @foreach ($user->get_anak as $item)
            <div class="col-lg-3 product-grid">
                                    <div class="product-items">
                                            <div class="project-eff">
                                            <div id="nivo-lightbox-demo"> <p> <a href="/backend/{{$item->id}}/detail_anak" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
                                                    <img class="img-responsive" src="img/{{$item->foto_anak}}" alt="">
                                            </div>
                                        <div class="produ-cost">
                                            <h4>{{$item->nama_anak}}</h4>
                                            <h5><i class="fa fa-map-marker"></i> {{$item->umur}}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
</div>         
                            @endif
                       
                                    
                            <a href="/backend/pages/anak/{{$user->id}}/create"><button class="btn btn-success">Tambah Anak</button></a>  
    </div>
    
</div>
</div>
</div>	


@endsection