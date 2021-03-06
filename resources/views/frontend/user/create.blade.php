@extends('frontend.layouts.master')

@section('title','Project-Create')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">

    <div class="col-xl-12 col-lg-12">
      <div id="success"></div>
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Create User</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="" id="myform" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3 form-group">
                <label for="email" class="font-weight-bold">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" id='email'>
                <p id="error"></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3 form-group">
                <button type="submit" class="btn btn-primary">ADD</button>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection

@push('script')
<script src="{{ asset('ui/frontend/js/all/user.js') }}"></script>
<script src="{{ asset('ui/frontend/js/all/config.js') }}"></script>
@endpush