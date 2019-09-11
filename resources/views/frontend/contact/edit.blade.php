@extends('frontend.layouts.master')

@section('title','Contact-Update')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Contact</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <form action="" id="myform" method="post">
                  @csrf
                  <div class="row">
                      <div class="col-md-6 mb-3 form-group">
                        <label for="name" class="font-weight-bold">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" id='name' value="{{ $contact->name }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3 form-group">
                        <label for="designation" class="font-weight-bold">Designation</label>
                        <input type="text" class="form-control" name="designation" placeholder="Enter Designation"
                          id='designation' value="{{ $contact->designation }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3 form-group">
                        <label for="email" class="font-weight-bold">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" id='email' value="{{ $contact->email }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3 form-group">
                        <label for="phone" class="font-weight-bold">Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter Phone No" id='phone' value="{{ $contact->phone }}">
                      </div>
                    </div>
                  <input type="hidden" value="{{ $contact->id }}" id="contact_id">
                  <button type="submit" id="update" class="btn btn-primary">Update</button>
                </form>
                </div>
              </div>
            </div>
        </div>
        <!-- /.container-fluid -->
@endsection

@push('script')
      <script src="{{ asset('ui/frontend/js/all/contact.js') }}"></script>
      <script src="{{ asset('ui/frontend/js/all/config.js') }}"></script>
      <script type="text/javascript">
        var contactRoute = "{{ route('contact.index')}}";
     </script>
@endpush