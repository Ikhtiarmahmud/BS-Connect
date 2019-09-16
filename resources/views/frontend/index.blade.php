@extends('frontend.layouts.master')

@section('title','Dashboard')

@section('content')
    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
                </div>
                <!-- Card Body -->
             
                   
              <div class="row">
                <div class="col-lg-3 col-md-6 m-5">
                  <div class="card">
                      <div class="card-body">
                           <a href="">
                          <div class="stat-widget-five">
                              <div class="stat-icon dib flat-color-1">
                                  <i class="fa fa-paper-plane"></i>
                              </div>
                              <div class="stat-content">
                                  <div class="text-left dib"> 
                                      <div class="stat-text"><span class="count">
                                        {{$contact_count }}
                                      </span></div>
                                      <div class="stat-heading">Total Contact</div>
                                  </div>
                              </div>
                          </div>
                          </a>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 m-5">
                <div class="card">
                    <div class="card-body">
                         <a href="">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib"> 
                                    <div class="stat-text"><span class="count">
                                     {{$user_count}}
                                    </span></div>
                                    <div class="stat-heading">Total User</div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
              </div>

              

              </div>
            </div>

          </div>
          
        </div>
        <!-- /.container-fluid -->


@endsection