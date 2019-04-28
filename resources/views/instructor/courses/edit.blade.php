@extends('layouts.users')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')
<h2 class="text-center">Create New users</h2>
    <div class="container col-md-10 offset-md-1">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Users Table</h6> 
                </div>
            <div class="card-body">
                    {!! Form::model($course, array('url' => 'users/courses/' . $course->id, 'method' => 'PUT', 'files'=>true)) !!}
                    @csrf 

                    <div class="form-group">
                        <label for="title">Course Title</label>
                        {!! Form::text('title', NULL,['class'=>'form-control', 'placeholder'=>'Enter user Title']) !!}
                        @if($errors->has('title'))
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        {!! Form::select('category_id',$categories, NULL,['class'=>'form-control', 'placeholder'=>'* Select Category']) !!}
                        @if($errors->has('category_id'))
                            <small class="text-danger">{{ $errors->first('category_id') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="description">Course Description</label>
                        {!! Form::textarea('description', NULL,['class'=>'form-control', 'placeholder'=>'Description']) !!}
                        @if($errors->has('description'))
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                        @endif
                    </div>
                                                   
                    <div class="form-group ">
                        <label for="image">Course Image : </label>
                        {!! Form::file('image', NULL, ['class' => 'form-control', 'placeholder' => 'Image']) !!}
                        @if($errors->has('image')) 
                            <small class="text-danger"> {{ $errors->first('image') }} </small>
                        @endif
                    </div>
                                                   
                    <div class="form-group ">
                        <img src="{{ asset($course->image) }}" alt="Image">
                    </div>

                        <button type="submit" class="btn btn-primary float-right">Submit</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection