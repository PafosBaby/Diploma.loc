@extends('layouts.app')

@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="{{asset('assets/img/slider/breadcrumb-bg-1.jpg')}}">
        {{-- <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">Корзина</h2>
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

    <section class="blog-sidebar-area pb-200">
        <div class="container pt-150">
            <div class="row justify-content-center mb-100 mt-100 ">
                <h2 class="tp-testimonial-form-title text-center">Сумма заказа: <span>{{getCartTotal()}} ₽</span></h2>
                    <form action="{{route('order.send-mail')}}" method="POST" class="tp-testimonial-two-form-wrapper col-md-6">
                        @csrf
                            <div class="input-field form-group mb-15 ">
                                <input type="text" placeholder="Your name" name="user_name" id="user_name" class="fom-control">
                            </div>
                            <div class="input-field form-group mb-15 ">
                                <input type="text" placeholder="Your surname" name="user_surname" id="user_surname" class="fom-control">
                            </div>
                            <div class="input-field form-group mb-15">
                                <input type="text" placeholder="Email" name="user_email"  id="user_email" class="fom-control">
                            </div>
                            <div class="input-field form-group mb-15">
                                <input type="text" placeholder="Phone" name="user_phone"  id="user_phone" class="fom-control">
                            </div>
                            <div class="input-field form-group">
                                <button class="yellow-btn">Оформить заказ</button>
                            </div>
                    </form>
            </div>
        </div>
    </section>
</main>
@endsection
