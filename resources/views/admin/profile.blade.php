@extends('layouts.admin')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')
<h2 class="text-center">Update Your Profile </h2>
    <div class="container col-md-10 offset-md-1">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Table</h6> 
                </div>
            <div class="card-body">
                    {!! Form::model($user, array('url' => 'admin/profile/'.$user->id,'method' => 'PUT', 'files'=>true)) !!}
                    @csrf 

                    <div class="form-group">
                        <label for="name">User Name</label>
                        {!! Form::text('name', NULL,['class'=>'form-control', 'placeholder'=>'Enter user name']) !!}
                        @if($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>

                    <div class="form-group">
                        <label for="email">User Email</label>
                        {!! Form::text('email', NULL,['class'=>'form-control', 'placeholder'=>'Enter user email']) !!}
                        @if($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>

                    <div class="form-group">
                        <label for="role">Role</label>
                        {!! Form::text('role', NULL,['class'=>'form-control', 'placeholder'=>'Enter user role']) !!}
                        @if($errors->has('role'))
                            <small class="text-danger">{{ $errors->first('role') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date Of Birth</label>
                        {!! Form::text('dob', NULL,['class'=>'form-control', 'placeholder'=>'Enter user dob']) !!}
                        @if($errors->has('dob'))
                            <small class="text-danger">{{ $errors->first('dob') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        {!! Form::text('phone', NULL,['class'=>'form-control', 'placeholder'=>'Enter user phone']) !!}
                        @if($errors->has('phone'))
                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>
                     
                    <div class="form-group">
                        <label for="address">Address</label>
                        {!! Form::text('address', NULL,['class'=>'form-control', 'placeholder'=>'Enter user address']) !!}
                        @if($errors->has('address'))
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>
                     
                    <div class="form-group">
                        <label for="institute">Institute</label>
                        {!! Form::text('institute', NULL,['class'=>'form-control', 'placeholder'=>'Enter user institute']) !!}
                        @if($errors->has('institute'))
                            <small class="text-danger">{{ $errors->first('institute') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>
                     
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        {!! Form::text('subject', NULL,['class'=>'form-control', 'placeholder'=>'Enter user subject']) !!}
                        @if($errors->has('subject'))
                            <small class="text-danger">{{ $errors->first('subject') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>

                    <a href="{{url('admin/profile')}}" class="btn btn-success float-right">Cancel</a>
                    <button type="submit" class="btn btn-primary float-right mr-1">Update</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection