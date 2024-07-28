@extends('backend.layout')
@section('title')
Manage Gallery pages
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Gallery</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Gallery</li>
          <li class="breadcrumb-item active">Add Gallery</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body ">
              <h5 class="card-title">Add Gallery Form</h5>
              
                @if(Session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

              <h5 class="card-title text-center">Add Gallery </h5>
              <!-- No Labels Form -->
              <form method="post" enctype="multipart/form-data" class="row g-3 " >
                @csrf
                <div class="col-md-12">
                  <select name="catid" class="@error('catid') is-invalid @enderror form-control">
                    <option value="#">-select gallery category-</option>
                    @foreach($catname as $cat1)
                    <option value="{{$cat1->id}}">{{$cat1->category_name}}</option>
                    @endforeach
                  </select>
                  @error('catid')
                  <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                
                <div class="col-md-12">
                  <input type="file" name="gimg" class="@error('gimg') is-invalid @enderror form-control" >
                  @error('gimg')
                  <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                 <ul class="ms-3 mt-0">
                  <li style="font-size:12px !important;color:red !important">Please upload an image file in either JPEG, PNG, or JPG format.</li>
                  <li style="font-size:12px !important;color:red !important">Please upload an image with dimensions of 500x350 pixels.</li>
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