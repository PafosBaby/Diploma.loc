@extends('layouts.app')

@section('content')

<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="assets/img/slider/breadcrumb-bg-1.jpg">
        {{-- <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">Our <span>Project</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Our Project</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- breadcrumb area end -->

    <!-- project area start here -->
    <div class="tp-prjects-area pt-120 pb-120">
        <div class="container">
            {{-- <div class="row">
                <div class="col-12">
                    <div class="tp-prjects-tab-menu mb-60">
                        <ul class="nav justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Carpet</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Glass</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab1" data-bs-toggle="tab" data-bs-target="#contact1" type="button" role="tab" aria-controls="contact1" aria-selected="false">Outdoor</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab2" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2" aria-selected="false">Office</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab3" data-bs-toggle="tab" data-bs-target="#contact3" type="button" role="tab" aria-controls="contact3" aria-selected="false">Kitchen</button>
                            </li>
                          </ul>
                    </div>
                </div>
            </div> --}}
            <div class="row pb-50">
                <div class="col-12">
                    <div class="tp-prjects-tab-content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tp-project z-index mb-30">
                                            <div class="tp-project-img">
                                                <a href="{{route('app.product', $product)}}">
                                                    <img src="{{$product->getSmallImage()}}" class="img-fluid" alt="img not found">
                                                </a>
                                            </div>
                                            <div class="tp-project-text">
                                                <div class="tp-project-text-content">
                                                    {{-- <span class="tp-project-subtitle">Residential Service</span> --}}
                                                    <a href="{{route('app.product', $product)}}">
                                                        <h4>{{$product->name}}</h4>
                                                    </a>
                                                    <div class="price">
                                                        <h2 class="tp-project-title">{{$product->getPrice()}}</h2>
                                                    </div>
                                                </div>
                                                <div class="tp-project-text-icon">
                                                    <a href="{{route('cart.add-product', $product)}}" class="add-to-cart"><i class="fal fa-plus"></i></a>
                                                </div>
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
            <div class="row">
                <div class="col-12">
                    <div class="tp-projects-btn d-flex justify-content-center">
                        <a href="project-details.html" class="theme-btn"><i class="flaticon-enter"></i> Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project area end here -->

</main>

@endsection
@section('page-scripts')
    <script>
        $('.add-to-cart').on("click",function(e){
            e.preventDefault();
            let $this = $(this);
            $.ajax({
                url: $this.attr('href'),
                method: 'GET',
                success: function(res){
                    $('#header-cart-info').text('Корзина ('+ res.qty + ')');
                    $('#header-cart-info-two').text('Корзина ('+ res.qty + ')');
                }
            })
        });
    </script>
@endsection
