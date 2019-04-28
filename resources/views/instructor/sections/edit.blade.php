@extends('layouts.users')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')
<h2 class="text-center">Create New Section</h2>
    <div class="container col-md-10 offset-md-1">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Section Table</h6> 
                </div>
            <div class="card-body">
               {!! Form::model($section, array('url'=>'users/sections/'.$section->id, 'method'=>'PUT')) !!}    
                    @csrf 

                    <div class="form-group">
                        <label for="course_id">Course</label>
                        {!! Form::select('course_id',$courses, NULL,['class'=>'form-control', 'placeholder'=>'* Select Course']) !!}
                        @if($errors->has('course_id'))
                            <small class="text-danger">{{ $errors->first('course_id') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>

                    <div class="form-group">
                        <label for="title">Section Title</label>
                        {!! Form::text('title', NULL,['class'=>'form-control', 'placeholder'=>'Section title ']) !!}
                        @if($errors->has('title'))
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        @endif
                    </div>

                        <button type="submit" class="btn btn-primary float-right">Submit</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection