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
                                            <label for="" class="col-sm-2 control-label">Jumlah Anak</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jumlah_anak" value="{{$user->get_anak->count()}}" disabled>
                                            </div>
                                    </div>
                                    <a href="/backend" class="btn btn-primary">Back</a>
                                    <input type="hidden" name="_method" value="put"> 
      </div>
    </div>
    <!-- End Panel Extended -->
  </div>
  <div class="col-lg-12 col-md-12">
  <div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Data Anak</h3>
    </div>
    @if ($user->get_anak()->count() == 0)
      <div class="panel-body">
        <h2>Belum mempunyai data anak</h2> 

    </div>
    @else
      <div class="panel-body">
      @foreach ($user->get_anak as $item)
      <div class="card card1" style="width: 18rem;">
        <a href="/backend/pages/anak/{{ $item->id }}/detail_anak"><img class="card-img-top" src="/img/{{$item->foto}}" alt=""></a>
        <div class="card-body">
          <p class="card-text">{{ $item->nama_anak }} <br> {{ $item->umur }}</p>
        </div>
      </div>
      @endforeach
    </div>
    @endif
  </div>
  </div>
</div>
</div>
</div>
</div>	


@endsection