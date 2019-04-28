@extends('layouts.admin')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')
<h2 class="text-center">Create New courses</h2>
    <div class="container col-md-6 offset-md-3">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">courses Table</h6> 
                </div>
            <div class="card-body">
                <form action="{{ url('admin/courses') }}" method="POST">    
                    @csrf            
                    <div class="form-group">
                        <label for="title">course Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter course Title">
                        @if($errors->has('title'))
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of course.</small>
                    </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection