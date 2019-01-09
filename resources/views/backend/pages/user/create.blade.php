@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Create user</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/backend/pages/user/') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fullname">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Alamat Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Kata Sandi</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Kata Sandi" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                    <div class="user-photo">
                                            <input type="file" name="image" accept="image/*" id="image" style="opacity:0">
                                            <input type="hidden" name="foto" id="photo">
                                            <div class="text-center"> Photo (Max File Size: 1MB)</div>
                                            <div class="upload">
                                                <div class="upload-content">
                                                <img src="{{ url('/img/default.png') }}" id="preview-image">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="role">Select Role</label>
                            <div class="example-wrap">
                            <h4 class="example-title"></h4>
                            
                            <div class="example">
                            <select class="form-control form-control-sm" name="role" id="role">
                                
                                
                                <option>admin</option>
                                <option>user</option>
                                
                                </select>

                            </div>
                            </div>
                            <!-- End Example Select Sizing -->
                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/backend/pages/user') }}" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
