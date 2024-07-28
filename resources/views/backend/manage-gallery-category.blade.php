@extends('backend.layout')
@section('title')
Manage Gallery Category pages
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Gallery Category</li>
          <li class="breadcrumb-item active">Manage Gallery Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gallery Category Datatables</h5>

              @if(Session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('success')}}
                    <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Gallery Category Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $srno=0;
                  @endphp
                @foreach($catname as $data1)
                 <tr>
                     <td>{{$srno= $srno+1}}</td>
                     <td>{{$data1->category_name}}</td>
                    <td> <a href="{{ URL('admin-login/update-category/'.$data1->id)}}" style="text-decoration:none;list-style-type:none;color:black;"><i class="bi bi-pencil"></i></a> | <a href='{{route('del-ga-cat',['id'=>$data1->id])}}' style="text-decoration:none;list-style-type:none;color:black;" onclick="return confirm('Are you sure to delete Data')"><i class="bi bi-trash"></i></a>  </td>

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