@extends('icream-app.layout')
@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Gallery</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Gallery</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5 px-0">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1 class="section-title position-relative text-center mb-5">Delicious Ice Cream Made From Our Very Own Organic Milk</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        @if($catname !== null)
                        @foreach($catname as $pimg1)
                       
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".{{substr($pimg1->catname, 0, 4)}}">{{$pimg1->catname}}</li>
                       
                        @endforeach
                        @endif

                        <!-- <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Vanilla</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Chocolate</li> -->
                    </ul>
                </div>
            </div>
            <div class="row m-0 portfolio-container">
                
                @if($catname !== null)
                @foreach($catname as $pgimg)
                    <div class="col-lg-4 col-md-6 p-0 portfolio-item {{ substr($pgimg->catname, 0, 4) }}">
                        <div class="position-relative overflow-hidden">
                            @if(file_exists(public_path('uploads/products-img/'.$pgimg->pgalleryimg)))
                                <img class="img-fluid w-100" width="450" height="450" src="{{ asset('uploads/products-img/'.$pgimg->pgalleryimg) }}">
                                <a class="portfolio-btn" href="{{ asset('uploads/products-img/'.$pgimg->pgalleryimg) }}" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                                </a>
                            @else
                                <div class="alert alert-warning text-center" role="alert">
                                    Image not found
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <div class="container-fluid">
                    <div class="row">
                        <div class="justify-cotent-center text-center" role="alert">
                        <p class="image-not-found-msg" style="font-size:20px !important;font-width:bold !important;font-align:center !important;" >Not Image </p>
                        </div>
                    </div>
                </div>
            @endif



                {{-- <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('icream-app/img/portfolio-2.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{asset('icream-app/img/portfolio-2.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('icream-app/img/portfolio-3.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{asset('icream-app/img/portfolio-3.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('icream-app/img/portfolio-4.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{asset('icream-app/img/portfolio-4.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('icream-app/img/portfolio-5.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{asset('icream-app/img/portfolio-5.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('icream-app/img/portfolio-6.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{asset('icream-app/img/portfolio-6.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Portfolio End -->

@endsection