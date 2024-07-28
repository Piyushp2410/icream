@extends('icream-app.layout')
@section('title')
iCREAM - Ice Cream Shop| Services Page
@endsection
@section('content')
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Best Services We Provide For Our Clients</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="row justify-content-center">
                            
                        @foreach($data as $data1)
                            <div class="col-md-3 mt-3">
                            <div class="service-item">
                                <div class="service-img mx-auto">
                                    <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{asset('uploads/'.$data1->service_img)}}" style="object-fit: cover;">
                                </div>
                                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">{{$data1->service_name}}</h5>
                                    <p>{{$data1->service_des}}</p>
                                    <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                                </div>
                            </div>

                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


@endsection