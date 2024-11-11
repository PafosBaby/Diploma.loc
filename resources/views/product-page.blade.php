@extends('layouts.app')

@section('content')

<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="{{asset('assets/img/slider/breadcrumb-bg-1.jpg')}}">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">Georgia <span>Mishel</span></h2>
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
    <section class="tp-team-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-team-bg theme-dark-bg">
                        <div class="tp-team fix">
                            <div class="tp-team-img">
                                <img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt="img not found">
                            </div>
                            <div class="tp-team-text pt-30 fix">
                                <h2 class="tp-section-title text-white">Georgia Mishel</h2>
                                <h4 class="tp-team-subtitle mb-25">Professional Cleaner</h4>
                                <p class="mb-35">Matent maecenas nec massa viverra ute litora aliquam habitant proin commodo bibendum rutrum habitant est magnis quisque aliquet congue vestibulum suscipi Eros tellus odio elite purus feugiat</p>
                                <ul class="pb-20">
                                    <li><a href="tel:2(800)6666520"><i class="fas fa-phone-alt"></i> 2 (800) 666 6520</a></li>
                                    <li><i class="fas fa-map-marker-alt"></i> 24/7 Casino street, England</li>
                                    <li><a href="mailto:info@klenar24.com"><i class="fas fa-envelope-open"></i> info@klenar24.com</a></li>
                                </ul>
                                <div class="sidebar__menu--social tp-team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google"></i></a>
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

