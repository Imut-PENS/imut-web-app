@extends('backend.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
            <?php
               if($rekomgizi == null){
            ?>
             
                  <center><h1>Belum Ada data pada Rekomendasi Gizi</h1><br>
                  <a href="{{ url('/backend/pages/rekomgizi/create') }}" class="btn btn-primary pull-right">Create New</a>
                  <div class="clearfix"></div></center>
            <?php
               }else{
            ?>
               
               <form action="{{ url('/backend/pages/rekomgizi/'.$rekomgizi->id) }}" method="post">
                  {{ csrf_field() }}
               <input type="hidden" name="_method" value="DELETE">
               <a href="{{ url('/backend/pages/rekomgizi/'.$rekomgizi->id.'/edit') }}" class="btn2 btn-success"><i class="fa fa-pencil"></i> Edit</a>
               <button type="submit" class="btn2 btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
               </form>
                <div class="clearfix"></div>
                <br>
                <center>
            <h1>{{ $rekomgizi->feature }}</h1>
            </center>
            <p>{!! $rekomgizi->content !!}</p>
            <?php
               }
            ?>
            </div>
         </div>
      </div>
   </div>
@endsection
