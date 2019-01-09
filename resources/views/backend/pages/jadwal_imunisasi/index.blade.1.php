@extends('backend.master')
@section('content')
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        Jadwal Imunisasi
      </div>
      <div class="panel-body">
          <form action="{{ route('jadwal_imunisasi.add') }}" method="POST">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
              @elseif(Session::has('warning'))
                <div class="alert alert-danger">{{ Session::get('warning') }}</div>
              @endif
            </div>
           
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="form-group">
              <label for="fullname">Jenis Imunisasi:</label>
            <input type="text" class="form-control" name="jenis_imunisasi" id="jenis_imunisasi" placeholder="Jenis Imunisasi">
                  {!! $errors->first('jadwal_imunisasi_id', '<p class="alert alert-danger">:message</p>') !!}
                </div>
              </div>
            

            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="form-group">
              <label for="start_date">Start Date:</label>
            <input type="date" class="form-control" name="start_date" id="start_date">
                
                  
                  {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                
              </div>
            </div>
            
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="form-group">
              <label for="end_date">End Date:</label>
              <input type="date" class="form-control" name="end_date" id="end_date">
                  {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                </div>
              </div>
            </div>

            <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp; </br>
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
          </div>
          </form>
      </div>
      
    </div>
  </div>
@endsection




@extends('backend.master')
@section('content')
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        Jadwal Imunisasi
      </div>
      <div class="panel-body">
          {!! Form::open(array('route' => 'jadwal_imunisasi.add','method'=>'POST','files'=>'true')) !!}
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
              @elseif(Session::has('warning'))
                <div class="alert alert-danger">{{ Session::get('warning') }}</div>
              @endif
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="form-group">
                {!! Form::label('jadwal_imunisasi_id', 'Jadwal Imunisasi:') !!}
                <div class="">
                  {!! Form::text('jadwal_imunisasi_id', null, ['class'=> 'form-control']) !!}
                  {!! $errors->first('jadwal_imunisasi_id', '<p class="alert alert-danger">:message</p>') !!}
                </div>
              </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="form-group">
                {!! Form::label('start_date', 'Start Date:') !!}
                <div class="">
                  {!! Form::date('start_date', null, ['class'=> 'form-control']) !!}
                  {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                </div>
              </div>
            </div>
            
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="form-group">
                {!! Form::label('end_date', 'End Date:') !!}
                <div class="">
                  {!! Form::date('end_date', null, ['class'=> 'form-control']) !!}
                  {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                </div>
              </div>
            </div>

            <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp; </br>
              {!! Form::submit('Add Jadwal',['class'=>'btn btn-primary']) !!}
              
            </div>
          </div>
          {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection

