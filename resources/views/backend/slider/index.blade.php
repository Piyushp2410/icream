@extends('backend.layout')
@section('title')
Manage Slider pages
@endsection


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Slider</li>
          <li class="breadcrumb-item active">Manage Slider</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Slider Datatables</h5>
              @if(session('success'))
              



              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                  <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
          @endif
          
          @if(session('update'))
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{session('update')}}
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
          
          @if(session('del'))
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
                    <th>Slider name</th>
                    <th>Slider Button URL</th>
                    <th>Slider Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                    $srno=0;
                    @endphp
                @foreach($slide_data as $slide_data)
                 <tr>
                     <td>{{$srno=$srno+1}}</td>
                     <td>{{$slide_data->slide_name}}</td>
                     <td>{{$slide_data->slide_btn_name}}</td>
                     <td><img src="{{asset('uploads/slider-img/'.$slide_data->slide_img)}}" class="border border-1 border-dark p-1 img img-responsive rounded rounded-4" width="70" alt=""></td>
                     <td><a href="{{route('edit-slider',['id'=>$slide_data->id])}}" style="text-decoration:none;list-style-type:none;color:black;"><i class="bi bi-pencil"></i></a> | <a href='{{route('del-slider',['id'=>$slide_data->id])}}' style="text-decoration:none;list-style-type:none;color:black;" onclick="return confirm('Are you sure to delete Data')"><i class="bi bi-trash"></i></a>  </td>
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