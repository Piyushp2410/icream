@extends('backend.layout')
@section('title')
Manage Products pages
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Products</li>
          <li class="breadcrumb-item active">Add Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body ">
              <h5 class="card-title">Add Products Datatables</h5>
              
              @if(Session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('success')}}
                    <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
              <h5 class="card-title text-center">Add Products Items</h5>
<!-- No Labels Form -->
<form method="post" enctype="multipart/form-data" class="row g-3 " >
  @csrf
  <div class="col-md-12">
    <input type="text" name="pname" class="@error('pname') is-invalid @enderror form-control" placeholder="Product Name">
    @error('pname')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>
  <div class="col-md-12">
    <input type="text" name="pprice" class="@error('pprice') is-invalid @enderror form-control" placeholder="Product Price">
    @error('pprice')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>
  <div class="col-md-12">
    <input type="file" name="pimg" class="@error('pimg') is-invalid @enderror form-control" >
    @error('pimg')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>
  <div class="col-md-12">
    <textarea type="text" name="pdes" class="@error('pdes') is-invalid @enderror form-control" rows="6" placeholder="Products Description"></textarea>
    @error('pdes')
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