@extends('backend.master')

@section('content')
      <form method="POST" action="{{ url('/backend/pages/rekomgizi/') }}"  enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <center>
            <h1>Rekomendasi Gizi </h1>
            <h4>Membuat rekomendasi gizi</h4>
            </center>
            <div class="form-group">
            <label for="usr">Judul:</label>
            <input type="text" class="form-control" name="feature">
            </div>
            <div class="form-group">
            <strong>Content:</strong>
            <textarea class="form-control" name="content"></textarea>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
         </form>
   
@endsection
