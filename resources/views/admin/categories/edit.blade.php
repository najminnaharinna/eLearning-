@extends('layouts.admin')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')
<h2 class="text-center">Edit Table</h2>
    <div class="container col-md-6 offset-md-3">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Category Edit Table</h6> 
                </div>
            <div class="card-body">
                <form action="{{ url('admin/categories/'.$category->id) }}" method="post">    
                    @csrf    
                    @method('put')        
                    <div class="form-group">
                        <label for="title">Category Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $category->title }}" placeholder="Enter category Title">
                        @if($errors->has('title'))
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        @endif
                        <small id="texthelp" class="form-text text-muted">Name of category.</small>
                    </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection