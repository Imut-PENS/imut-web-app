@extends('backend.master')

@section('content')

<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> -->
<div class="container" id="app">
<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">Grafik Tinggi Badan Berdasarkan Umur</h4>
        </div>
        <div class="panel-body">
        <growth-component></growth-component>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">Grafik Berat Badan Berdasarkan Umur</h4>
        </div>
        <div class="panel-body">
        <weight-component></weight-component>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">Grafik Lingkar Kepala Berdasarkan Umur</h4>
        </div>
        <div class="panel-body">
        <head-component></head-component>
        </div>
    </div>
</div>
   
</div>
<script>
         window.Laravel = <?php echo json_encode([
             'csrfToken' => csrf_token(),
          ]); ?>
   </script>
   <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection