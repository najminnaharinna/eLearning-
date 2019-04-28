@extends('layouts.admin')

@section('css')
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main-content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

  @include('flash::message')

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">users</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Users Table</h6> 
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Serial No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th class="text-right">Action</th>
            </tr>
          </thead> 
          <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td class="text-right">
                    <form method="post" action="{{ url('admin/users/' . $user->id ) }}">
                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info"> View </a>
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</button>
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