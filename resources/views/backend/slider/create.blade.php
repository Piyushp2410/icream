@extends('backend.layout')
@section('title')
Manage Slider pages
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Slider</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Slider</li>
          <li class="breadcrumb-item active">Add Slider</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body ">
              <h5 class="card-title">Add Slider Form</h5>
              
              
              <h5 class="card-title text-center">Add Slider </h5>
              <!-- No Labels Form -->
              <form method="post" enctype="multipart/form-data" class="row g-3 " >
                @csrf
                <div class="col-md-12">
                <input type="text" name="slide_name" value="{{old('slide_name')}}" placeholder="Enter Slide Title" class=" @error('slide_name') is-invalid @enderror form-control">
                  @error('slide_name')
                  <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>

                <div class="col-md-12">
                  <input type="text" name="slide_btn_url" value="{{old('slide_btn_url')}}" placeholder="Enter Slide button URL" class=" @error('slide_btn_url') is-invalid @enderror form-control">
                  @error('slide_btn_url')
                  <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="col-md-12">
                  <input type="file" name="slide_img" class="@error('slide_img') is-invalid @enderror form-control" onchange="previewImage(this);">
                  <img id="preview" src="#"  style="display: none; max-width: 50%; margin-top: 10px; height: 200px;" class="rounded border border-1 border-dark p-1">

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