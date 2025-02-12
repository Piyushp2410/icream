@extends('icream-app.layout')
@section('title')
iCREAM - Ice Cream Shop| Home Page
@endsection
@section('content')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('icream-app/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Traditional Ice Cream Since 1950</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('icream-app/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Made From Our Own Organic Milk</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>


                @foreach($slider_data as $slider_data_list)
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('uploads/slider-img/'.$slider_data_list->slide_img)}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">{{$slider_data_list->slide_name}}</h1>
                            <a href="{{$slider_data_list->slide_btn_name}}" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Traditional & Delicious Ice Cream Since 1950</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea</h5>
                    <p>Takimata sed vero vero no sit sed, justo clita duo no duo amet et, nonumy kasd sed dolor eos diam lorem eirmod. Amet sit amet amet no. Est nonumy sed labore eirmod sit magna. Erat at est justo sit ut. Labor diam sed ipsum et eirmod</p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{asset('icream-app/img/about.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{asset('icream-app/img/promotion.jpg')}}" style="object-fit: cover;">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">$199</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Chocolate Ice Cream</h3>
                    <p class="text-white mb-4">Lorem justo clita dolor ipsum ut sed eos, ipsum et dolor kasd sit ea
                        justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


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
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="service-item">
                                <div class="service-img mx-auto">
                                    <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{asset('icream-app/img/service-1.jpg')}}" style="object-fit: cover;">
                                </div>
                                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Quality Maintain</h5>
                                    <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                    <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                                </div>

                                
                                </div>
                            </div>

                            <div class="col-md-4 mt-3">
                                <div class="service-item">
                                <div class="service-img mx-auto">
                                    <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{asset('icream-app/img/service-1.jpg')}}" style="object-fit: cover;">
                                </div>
                                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Quality Maintain</h5>
                                    <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                    <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                                </div>

                                
                                </div>
                            </div>

                            <div class="col-md-4 mt-3">
                                <div class="service-item">
                                <div class="service-img mx-auto">
                                    <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{asset('icream-app/img/service-1.jpg')}}" style="object-fit: cover;">
                                </div>
                                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Quality Maintain</h5>
                                    <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                    <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                                </div>

                                
                                </div>
                            </div>

                            <div class="col-md-4 mt-3">
                                <div class="service-item">
                                <div class="service-img mx-auto">
                                    <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{asset('icream-app/img/service-1.jpg')}}" style="object-fit: cover;">
                                </div>
                                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Quality Maintain</h5>
                                    <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                    <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                                </div>

                                
                                </div>
                            </div>

                            <div class="col-md-4 mt-3">
                                <div class="service-item">
                                <div class="service-img mx-auto">
                                    <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{asset('icream-app/img/service-1.jpg')}}" style="object-fit: cover;">
                                </div>
                                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Quality Maintain</h5>
                                    <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                    <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                                </div>

                                
                                </div>
                            </div>

                            <div class="col-md-4 mt-3">
                                <div class="service-item">
                                <div class="service-img mx-auto">
                                    <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{asset('icream-app/img/service-1.jpg')}}" style="object-fit: cover;">
                                </div>
                                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Quality Maintain</h5>
                                    <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                    <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                                </div>

                                
                                </div>
                            </div>
                        </div>
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Delicious Ice Cream Made From Our Very Own Organic Milk</h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container">
           



          @foreach($gallery_data as $gallery_data)
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('uploads/products-img/'.$gallery_data->pgalleryimg)}}" alt="">
                    <a class="portfolio-btn" href="{{asset('uploads/products-img/'.$gallery_data->pgalleryimg)}}" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
          @endforeach


          {{-- <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{asset('icream-app/img/portfolio-2.jpg')}}" alt="">
                <a class="portfolio-btn" href="{{asset('icream-app/img/portfolio-2.jpg')}}" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div> --}}


        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Best Prices We Offer For Ice Cream Lovers</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div> 
            <div class="row justify-content-center">
                @foreach($product_data as $product_data)
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">${{$product_data->pprice}}</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="{{ asset('uploads/'.$product_data->pimg)}}" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">{{$product_data->pname}}</h5>
                        <p>{{$product_data->pdes}}</p>
                        <a href="#" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <!-- Products End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Experienced & Most Famous Ice Cream Chefs</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="row justify-content-center">
                            
                        @foreach($service_data as $service_data)
                            <div class="col-md-3 mt-3">
                            <div class="service-item">
                                <div class="service-img mx-auto">
                                    <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{asset('uploads/'.$service_data->service_img)}}" style="object-fit: cover;">
                                </div>
                                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">{{$service_data->service_name}}</h5>
                                    <p>{{$service_data->service_des}}</p>
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
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Clients Say About Our Famous Ice Cream</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('icream-app/img/testimonial-1.jpg')}}" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('icream-app/img/testimonial-2.jpg')}}" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{asset('icream-app/img/testimonial-3.jpg')}}" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection