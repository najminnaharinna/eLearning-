@extends('layouts.admin')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

  @include('flash::message')

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Categories</h1>
  
    <a href="{{ url('admin/categories/create') }}" class="btn btn-primary float-right">Add Categories</a>
  <br><br>


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Categories Table</h6> 
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Serial No</th>
              <th>Title</th>
              <th class="text-right">Action</th>
            </tr>
          </thead> 
          <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td class="text-right">
                  <form action="{{ url('admin/categories/'.$category->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ url('admin/categories/'.$category->id.'/edit') }}" class="btn btn-info">Edit</a>
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