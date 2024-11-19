@extends('layouts.app')

@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="{{asset('assets/img/slider/breadcrumb-bg-1.jpg')}}">
        <div class="tp-custom-container">
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
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- team area start here -->

    <section class="blog-sidebar-area">
        <div class="container">
            <h2>Сумма заказа: {{getCartTotal()}} ₽</h2>
            <form action="">
                <button class="yellow-btn">Оформить заказ</button>
            </form>
        </div>
    </section>
</main>
@endsection
