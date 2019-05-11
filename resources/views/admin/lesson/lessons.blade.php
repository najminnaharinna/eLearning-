@extends('layouts.admin')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

  @include('flash::message')

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Lessons</h1>
  


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Lessons Table</h6> 
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Instructor Name</th>
              <th>Course Title</th>
              <th>Section Title</th>
              <th>Title</th>
              <th class="text-right">Action</th>
            </tr>
          </thead> 
          <tbody>
            @foreach ($lessons as $lesson)
            <tr>
                <td>{{ $lesson->instructor->name }}</td>
                <td>{{ $lesson->course->title }}</td>
                <td>{{ $lesson->section->title }}</td>
                <td>{{ $lesson->title }}</td>

                <td class="text-right">
                  <form action="{{ url('admin/lessons/'.$lesson->id) }}" method="get">
                    @csrf
                    @method('delete')                    
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