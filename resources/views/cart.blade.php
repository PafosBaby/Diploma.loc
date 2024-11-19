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
                @if($cartItems->count())
                <div class="row">
                    <div class="col-xl-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Изобр.</th>
                                    <th>Товар</th>
                                    <th>Цена</th>
                                    <th>Кол-во</th>
                                    <th>Итого</th>
                                    <th>Действ.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td style="width: 140px">
                                            <img src="{{$item->product->getSmallImage()}}" class="img-fluid" alt="">
                                        </td>
                                        <td>
                                            {{$item->product->name}}
                                        </td>
                                        <td>
                                            {{$item->getPrice()}}
                                        </td>
                                        <td>
                                            {{$item->qty}}
                                        </td>
                                        <td>
                                            {{$item->getTotalPrice()}}
                                        </td>
                                        <td>
                                            <form action="{{route('cart.delete', $item)}}" method="POST">
                                                @csrf @method('DELETE')
                                                <button class="yellow-btn">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xl-4">
                        <h4>Сумма заказа:</h4>
                        <h2>{{getCartTotal()}} ₽</h2>
                        <a href="{{route('checkout')}}" class="btn btn-success">Оформить заказ</a>
                    </div>
                </div>
                @else
                <h2>Ваша корзина пуста!</h2>
                @endif
        </div>
    </section>
</main>
@endsection

