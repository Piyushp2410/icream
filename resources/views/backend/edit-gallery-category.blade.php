@extends('backend.layout')
@section('title')
Manage Gallery pages
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Gallery Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Gallery Category</li>
          <li class="breadcrumb-item active">Update Gallery Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body ">
              <h5 class="card-title">Update Gallery Category Form</h5>
              
              @if(Session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('success')}}
                    <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
              <h5 class="card-title text-center">Update Gallery Category</h5>
<!-- No Labels Form -->
<form method="post" enctype="multipart/form-data" class="row g-3 " >
  @csrf
  <div class="col-md-12">
    <input type="text" name="catname" value="{{$catdata['cat_name']}}" class="@error('catname') is-invalid @enderror form-control" placeholder="Gallery Category">
    @error('catname')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>
  
  
  
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