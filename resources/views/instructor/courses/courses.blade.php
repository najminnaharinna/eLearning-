@extends('layouts.users')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

  @include('flash::message')

  <!-- Page Heading -->
  <h1 class="mb-2 text-gray-800 text-center">Courses</h1>
  
    <a href="{{ url('users/courses/create') }}" class="btn btn-primary float-right">Add courses</a>
  <br><br>


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Courses Table</h6> 
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Serial No</th>
              <th>Title</th>
              <th>Category</th>
              <th class="text-right">Action</th>
            </tr>
          </thead> 
          <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->category->title }}</td>
                <td class="text-right">
                  <form action="{{ url('users/courses/'.$course->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ url('users/courses/' . $course->id) }}" class="btn btn-info"> View </a>
                    <a href="{{ url('users/courses/'.$course->id.'/edit') }}" class="btn btn-primary">Edit</a>
                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
              

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
    
@endsection

@section('js')
      <!-- Page level plugins -->
      <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

      <!-- Page level custom scripts -->
      <script>
        // Call the dataTables jQuery plugin
          $(document).ready(function() {
            $('#dataTable').DataTable();
          });
      </script>
@endsection