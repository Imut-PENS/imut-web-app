@extends('backend.master')
@section('content')
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        Jadwal Imunisasi
      </div>
      <div class="panel-body">
          <form action="{{ route('jadwal_imunisasi.add') }}" method="POST" files="true">
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
              <select class="form-control select2" name="jenis_imunisasis_id" id="" required>
                  <option value="">Pilih Jenis</option>
                                    @foreach($jenis_imunisasi as $data)
                                        <option value="{{ $data->id }}">{{ $data->jenis_imunisasi }}</option>
                                    @endforeach
                                    </select>
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
          

            <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp; </br>
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
          </div>
          </form>

      </div>
      
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">Jadwal Imunisasi</div>
      <div class="panel-body">
        
        {!! $calendar_details->calendar() !!}
      </div>
    </div>
  </div>
  <script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
 {!! $calendar_details->script() !!}
@endsection
