@extends('backend.master')

@section('content')

<div class="page-content container-fluid">
<div class="row">
  <div class="col-lg-4">
    <!-- Panel Basic -->
    <div class="panel panel1">
      <div class="panel-body">
      <img style="border-radius: 5px; width: 200px" src="{{ url('img/'.$employee->foto) }}" alt="">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-2" style="margin-top: 10px">
                                    {{ $employee->foto }}      
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
        <h3 class="panel-title">Data employee</h3>
      </div>
      <div class="panel-body">
      <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">employeename</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" value="{{$employee->name}}" disabled>
                                            </div>    
                                    </div>
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email" value="{{$employee->email}}" disabled>
                                            </div>
                                    </div>
                                   
                                    <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Role</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="notelp" value="{{$employee->role}}" disabled>
                                            </div>
                                    </div>
                                    <a href="/backend" class="btn btn-primary">Back</a>
                                    <input type="hidden" name="_method" value="put"> 
      </div>
    </div>
    <!-- End Panel Extended -->
  </div>
</div>
</div>
</div>
</div>	


@endsection