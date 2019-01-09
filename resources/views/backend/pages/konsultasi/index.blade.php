@extends('backend.master')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Chat</div>

            <div class="card-body" id="app">
                <chat-app :user="{{ auth()->employee() }}"></chat-app>
            </div>
        </div>
    </div>
</div>
</div>
<script src=/js/app.js></script>
@endsection