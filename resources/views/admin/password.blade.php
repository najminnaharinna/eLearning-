@extends('layouts.admin')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')
@include('flash::message')
<h2 class="text-center">Update Password</h2>
    <div class="container col-md-10 offset-md-1">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Password</h6> 
                </div>
            <div class="card-body">
                    {!! Form::open(array('url' => 'admin/password','method' => 'PUT')) !!}
                    @csrf 

                    <div class="form-group">
                        <label for="old_password">Password</label>
                        {!! Form::password('old_password',['class'=>'form-control', 'placeholder'=>'Enter old_password']) !!}
                        @if($errors->has('old_password'))
                            <small class="text-danger">{{ $errors->first('old_password') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">password of user.</small>
                    </div>

                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        {!! Form::password('new_password',['class'=>'form-control', 'placeholder'=>'Enter new_password']) !!}
                        @if($errors->has('new_password'))
                            <small class="text-danger">{{ $errors->first('new_password') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">password of user.</small>
                    </div>

                    <div class="form-group">
                        <label for="password_confirm">Confirm Password</label>
                        {!! Form::password('password_confirm',['class'=>'form-control', 'placeholder'=>'Enter password_confirm']) !!}
                        @if($errors->has('password_confirm'))
                            <small class="text-danger">{{ $errors->first('password_confirm') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">password of user.</small>
                    </div>

                    

                    <a href="{{url('admin/password')}}" class="btn btn-success float-right">Cancel</a>
                    <button type="submit" class="btn btn-primary float-right mr-1">Update</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection