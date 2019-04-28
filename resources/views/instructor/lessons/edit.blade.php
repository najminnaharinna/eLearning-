@extends('layouts.users')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')
<h2 class="text-center">Edit Lesson</h2>
    <div class="container col-md-10 offset-md-1">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Lesson Table</h6> 
                </div>
            <div class="card-body">
               {!! Form::model($lesson, array('url'=>'users/lessons/'.$lesson->id, 'method'=>'PUT','files'=> true)) !!}    
                    @csrf 

                    <div class="form-group">
                        <label for="course_id">Course</label>
                        {!! Form::select('course_id',$courses, NULL,['class'=>'form-control', 'placeholder'=>'* Select Course']) !!}
                        @if($errors->has('course_id'))
                            <small class="text-danger">{{ $errors->first('course_id') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>

                    {{-- <div class="form-group">
                        <label for="instructor_id">Instructor id</label>
                        {!! Form::select('instructor_id',$instructor, NULL,['class'=>'form-control', 'placeholder'=>'* Select Instructor']) !!}
                        @if($errors->has('instructor_id'))
                            <small class="text-danger">{{ $errors->first('instructor_id') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div> --}}

                    <div class="form-group">
                        <label for="section_id">Section id</label>
                        {!! Form::select('section_id',$sections, NULL,['class'=>'form-control', 'placeholder'=>'* Select Section']) !!}
                        @if($errors->has('section_id'))
                            <small class="text-danger">{{ $errors->first('section_id') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of user.</small>
                    </div>

                    <div class="form-group">
                        <label for="title">Lesson Title</label>
                        {!! Form::text('title', NULL,['class'=>'form-control', 'placeholder'=>'Section Title ']) !!}
                        @if($errors->has('title'))
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="discription">Section Discription</label>
                        {!! Form::textarea('discription', NULL,['class'=>'form-control', 'placeholder'=>'Enter lesson Discription ']) !!}
                        @if($errors->has('discription'))
                            <small class="text-danger">{{ $errors->first('discription') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="video_url">Section Video URL</label>
                        {!! Form::text('video_url', NULL,['class'=>'form-control', 'placeholder'=>'Enter Video URL ']) !!}
                        @if($errors->has('video_url'))
                            <small class="text-danger">{{ $errors->first('video_url') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="source_code_url">Section Source Code URL</label>
                        {!! Form::text('source_code_url', NULL,['class'=>'form-control', 'placeholder'=>'Enter Source Code URL ']) !!}
                        @if($errors->has('source_code_url'))
                            <small class="text-danger">{{ $errors->first('source_code_url') }}</small>
                        @endif
                    </div>

                        <button type="submit" class="btn btn-primary float-right">Submit</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection