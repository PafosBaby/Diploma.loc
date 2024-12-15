@extends('layouts.app')

@section('content')

<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="{{asset('assets/img/slider/breadcrumb-bg-1.jpg')}}">
        {{-- <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">{{$product->name}}</h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Georgia Mishel</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- breadcrumb area end -->

    <!-- team area start here -->

    <section class="blog-sidebar-area pt-120 pb-110">
        <div class="container">
            <div class="tp-custom-container-box">
                <div class="row">
                    <div class="col-8">
                        <div class="ablog__sidebar--wrapper mr-50">
                            <div class="ablog ablog-4 mb-55 wow fadeInUp" data-wow-delay=".6s">
                                <div class="ablog__img">
                                    <div class="ablog__img--active swiper-container">
                                        <div class="swiper-wrapper">
                                            @foreach ($product->images as $image)
                                            <div class="ablog__img--item swiper-slide">
                                                <img src="{{$product->getLargeImage()}}" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="ablog__img--item swiper-slide">
                                                <img src="{{$image->getImage('large')}}" class="img-fluid" alt="img not found">
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-blog-button-prev slide-prev"><i class="far fa-chevron-left"></i></div>
                                        <div class="swiper-blog-button-next slide-next"><i class="far fa-chevron-right"></i></div>
                                    </div>
                                </div>
                                <div class="ablog__text ablog__text4">
                                    <h3 class="ablog__text--title4 mb-20"><a href="">{{$product->name}}</a></h3>
                                    <p class="mb-15">{{$product->description}}</p>
                                    <h3>{{$product->getPrice()}}</h3>
                                    <div class="ablog__btn4">
                                        <a href="{{route('cart.add-product', $product)}}" class="theme-btn add-to-cart"><i class="flaticon-enter"></i>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

