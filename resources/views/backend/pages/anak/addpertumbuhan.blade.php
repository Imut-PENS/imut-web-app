@extends('backend.master')

@section('content')
<div class="container" id="app">
   <growth-add-component></growth-add-component>
</div>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection