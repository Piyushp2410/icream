@extends('backend.layout')
@section('title')
Update Products 
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Products</li>
          <li class="breadcrumb-item active">Update Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body ">
              <h5 class="card-title">Update Products Datatables</h5>
              
              
              <h5 class="card-title text-center">Update Products Items</h5>
<!-- No Labels Form -->
<form method="POST" enctype="multipart/form-data" class="row g-3 " >
  @csrf
  <div class="col-md-12">
    <input type="text" name="pname" value="{{$data['pname']}}" class="@error('pname') is-invalid @enderror form-control" placeholder="Product Name">
    @error('pname')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>
  <div class="col-md-12">
    <input type="text" name="pprice" value="{{$data['pprice']}}" class="@error('pprice') is-invalid @enderror form-control" placeholder="Product Price">
    @error('pprice')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>
  <div class="col-md-12">
    <input type="file" name="pimg" value="{{$data['pimg']}}" class="@error('pimg') is-invalid @enderror form-control" >
        <!-- <input type="file" value="{{$data['pimg']}}" name="pimg" class="@error('pimg') is-invalid @enderror form-control" id="exampleLastName" > -->
        <img src="{{ asset('uploads/'.$data->pimg)}}" class="img img-responsive rounded m-4" alt="" width="100">
    @error('pimg')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>
  <div class="col-md-12">
    <textarea type="text" name="pdes" class="@error('pdes') is-invalid @enderror form-control" rows="6" placeholder="Products Description">{{$data['pdes']}}</textarea>
    @error('pdes')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
  </div>
  
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Update</button>
    {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
  </div>
</form><!-- End No Labels Form -->



            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 
@endsection