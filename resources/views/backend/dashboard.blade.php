@extends('backend.layout')
@section('title')
Admin Dashboard
@endsection


@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->


<section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <a href="{{route('manage-products')}}">
                  <div class="card-body">
                    <h5 class="card-title">Products</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-menu-button-wide"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$psum}}</h6>
  
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div><!-- End Sales Card -->


            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <a href="{{route('manage-services')}}">
                  <div class="card-body">
                    <h5 class="card-title">Services</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-layout-text-window-reverse"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$ser}}</h6>
  
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div><!-- End Sales Card -->


            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <a href="{{route('manage-gal')}}">
                  <div class="card-body">
                    <h5 class="card-title">Products Gallery</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-journal-text"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$product_gallery_sum}}</h6>
  
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <a href="{{route('contacts-home')}}">
                  <div class="card-body">
                    <h5 class="card-title">Contacts</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-phone"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$csum}}</h6>
  
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div><!-- End Sales Card -->

           


</main><!-- End #main -->
@endsection