@extends('backend.layout')
@section('title')
Manage Service pages
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Service</li>
          <li class="breadcrumb-item active">Manage Service</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <h5 class="card-title">Service Details</h5>
              @if(Session('update'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('update')}}
                    <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                @if(Session('del'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{session('del')}}
                    <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Service Heading</th>
                    <th>Servicer IMG</th>
                    <th>Service Des.</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @php
                $srno=0;
                @endphp
                @foreach($data as $data1)
                 <tr>
                     <td>{{$srno = $srno+1}}</td>
                     <td>{{$data1->service_name}}</td>
                    <td><img src="{{asset('uploads/'.$data1->service_img)}}" alt="" class="border border-1 border-dark p-1 img img-responsive rounded rounded-4" width="50"></td>
                    <td>{{$data1->service_des}}</td> 
                    <td> <a href="{{route('edit-service-home',['id'=>$data1->id])}}" style="text-decoration:none;list-style-type:none;color:black;"><i class="bi bi-pencil"></i></a> | <a href="{{route('del-service',['id'=>$data1->id])}}" style="text-decoration:none;list-style-type:none;color:black;" onclick="return confirm('Are you sure to delete Data')"><i class="bi bi-trash"></i></a>  </td>

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