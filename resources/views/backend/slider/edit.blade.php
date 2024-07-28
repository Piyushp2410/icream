@extends('backend.layout')
@section('title')
Manage Slider pages
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Slider</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Slider</li>
          <li class="breadcrumb-item active">Update Slider</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body ">
              <h5 class="card-title">Update Slider Form</h5>
              
              @if(Session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('success')}}
                    <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
              <h5 class="card-title text-center">Add Slider </h5>
<!-- No Labels Form -->
<form method="post" enctype="multipart/form-data" class="row g-3 " >
  @csrf
  <div class="col-md-12">
   <input type="text" name="slide_name" value="{{$slider_data->slide_name}}" placeholder="Enter Slide Title" class=" @error('slide_name') is-invalid @enderror form-control">
    @error('slide_name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>

  <div class="col-md-12">
    <input type="text" name="slide_btn_url" value="{{$slider_data->slide_btn_name}}" placeholder="Enter Slide button URL" class=" @error('slide_btn_url') is-invalid @enderror form-control">
     @error('slide_btn_url')
     <p class="invalid-feedback">{{ $message }}</p>
     @enderror
   </div>
  <div class="col-md-12">
    <input type="file" name="slide_img" class="@error('slide_img') is-invalid @enderror form-control" onchange="previewImage(this);">

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <p>New Image</p>
                <img id="preview" src="{{asset('icream-app/img/not-image-placeholder.jpg')}}"  class="mt-2 border border-1 border-dark p-1 img img-responsive rounded m-4" alt="" width="50%">
            </div>
            <div class="col-md-5">
                <p>Old Image</p>
                <img src="{{ asset('uploads/slider-img/'.$slider_data->slide_img)}}" class=" border border-1 border-dark p-1 img img-responsive rounded m-4" alt="" width="50%">
            </div>
        </div>
    </div>
    @error('slide_img')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>
  <ul class="ms-3 mt-0">
    <li style="font-size:12px !important;color:red !important">Please upload an image file in either JPEG, PNG, or JPG format.</li>
    <li style="font-size:12px !important;color:red !important">Please upload an image with dimensions of 1366x800 pixels.</li>
    <li style="font-size:12px !important;color:red !important">Please make sure that the image size is less than or equal to 2 megabytes (MB).</li>
   </ul>
  
  
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
</form><!-- End No Labels Form -->



            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection