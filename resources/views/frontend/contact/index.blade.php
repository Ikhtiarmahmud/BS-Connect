@extends('frontend.layouts.master')

@section('title','Contact')

@push('css')
   <!-- Custom styles for this page -->
   <link href="{{ asset('ui/frontend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
               <a href="{{route('contact.create')}}" class="btn btn-primary mb-3">Create New</a>
               <div class="card mb-4 bg-light">
                <div class="card-body">
                <form action="{{ route('contact.import')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="file" name="file" class="mb-3">
                      <br>
                      <button class="btn btn-success">Import User Data</button>
                  </form>
              </div>
               </div>
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Project</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($contacts as $key=>$contact)
                        <tr class="old-tr">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->designation }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td><a href="{{ route('contact.edit', $contact->id)}}">Edit</a> | <a href="" onclick="del({{$contact->id}})">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /.container-fluid -->
@endsection

@push('script')
    <script src="{{ asset('ui/frontend/js/all/contact.js') }}"></script>
    <script src="{{ asset('ui/frontend/js/all/config.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('ui/frontend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('ui/frontend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('ui/frontend/js/demo/datatables-demo.js')}}"></script>
    <script type="text/javascript">
      var contactRoute = "{{ route('contact.index')}}";
   </script>

    
@endpush