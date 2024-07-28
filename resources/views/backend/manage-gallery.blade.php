@extends('backend.layout')
@section('title')
Manage Gallery pages
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Gallery</li>
          <li class="breadcrumb-item active">Manage Gallery</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gallery Datatables</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Gallery Category</th>
                    <th>Galleryr IMG</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

              @php
              $srno=0;
              @endphp
              @foreach($gimg as $pimg)
                 <tr>
                     <td>{{$srno=$srno+1}}</td>
                     <td>{{$pimg->catname}}</td>
                    <td><img src="{{ asset('uploads/products-img/'.$pimg->pgalleryimg)}}" class="border border-1 border-dark p-1 img img-responsive rounded rounded-4" width="70" alt=""></td>
                    <td> <a href="{{route('edit-gal',['id'=>$pimg->id])}}" style="text-decoration:none;list-style-type:none;color:black;"><i class="bi bi-pencil"></i></a> | <a href='{{route('del_gal',['id'=>$pimg->id])}}' style="text-decoration:none;list-style-type:none;color:black;" onclick="return confirm('Are you sure to delete Data')"><i class="bi bi-trash"></i></a>  </td>

                  </tr>
                @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection