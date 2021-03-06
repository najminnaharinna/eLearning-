@extends('layouts.users')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

  @include('flash::message')

  <a href="{{ url('users/courses') }}" class="btn btn-info"> Back </a>
<br>
<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Course Information </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       
        <tbody>
            <tr>
                <td> Title </td>
                <td> {{ $course->title }} </td>
            </tr>
            <tr>
                <td> Category </td>
                <td> {{ $course->category->title }} </td>
            </tr>
            <tr>
                <td> Description </td>
                <td> {!! $course->description !!} </td>
            </tr>
            <tr>
                <td> Image </td>
                <td>
                <img src="{{ asset($course->image) }}" alt="Image"> 
                </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
    
@endsection
