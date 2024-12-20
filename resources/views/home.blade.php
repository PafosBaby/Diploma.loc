@extends('layouts.app')

@section('content')
<main>
    <!-- hero area start here -->
    <section class="tp-slider-area fix">
        <div class="tp-slider-active swiper-container common-dots">
            <div class="swiper-wrapper">
                <div class="tp-single-slider tp-slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                    <div class="slide-bg" data-background="assets/img/slider/slider-bg-1.jpg"></div>
                    <div class="slider-img">
                        <img src="assets/img/slider/slider-img-1.jpg" class="img-fluid" alt="img not found">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tp-slider-wrapper mt-60 position-relative">
                                    <div class="tp-slider-video-btn play_btn">
                                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/o4GuSJYSzrY"><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="tp-slider z-index">
                                        <h5 class="tp-slider-subtitle common-yellow-shape w-80 mb-35" data-animation="fadeInUp" data-delay=".5s">{{__("Fast and efficient service")}}</h5>
                                        <h1 class="tp-slider-title mb-45" data-animation="fadeInUp" data-delay=".8s">{{__("Cleaning")}} <br>{{__("Excellence")}} <br>{{__("Guaranteed!")}}</h1>
                                        <div class="tp-slider-btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="about.html" class="theme-btn"><i class="flaticon-enter"></i>{{__("Learn More")}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-paginations slide-dots"></div>
        </div>
    </section>
    <!-- hero area end here -->

    <!-- about area start here -->
    <section class="tp-about-area position-relative pt-120 pb-90 fix">
        <div class="tp-about-shape">
            <img src="assets/img/about/about-shape-1.jpg" class="img-fluid" alt="img not found">
        </div>
        <div class="container">
            <div class="row justify-content-xl-between justify-content-md-center">
                <div class="col-xl-5 col-12">
                    <div class="tp-about-img z-index wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/about/about-img-1.jpg" alt="img not found">
                    </div>
                </div>
                <div class="col-xl-6 col-md-10">
                    <div class="tp-about-text z-index wow fadeInUp" data-wow-delay=".6s">
                        <div class="section-title-wrapper mb-30">
                            <h5 class="tp-section-subtitle common-yellow-shape mb-20">{{__("About our Company")}}</h5>
                            <h2 class="tp-section-title">{{__("Up your Mess")}}</h2>
                        </div>
                        <p class="mb-40">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ullam ipsam sapiente, praesentium
                            omnis explicabo, quos sequi nostrum doloribus fugit nulla! Labore, dolores et nemo in eius aliquid rem nostrum.</p>
                        <div class="row mb-10">
                            <div class="col-sm-6">
                                <div class="tp-about-service mb-30">
                                    <div class="tp-about-service-icon yellow-circle-shape mb-15">
                                        <i class="flaticon-snowfall"></i>
                                    </div>
                                    <div class="tp-about-service-text">
                                        <h4 class="tp-about-service-text-title mb-15 hover-theme-color"><a href="service.html">Residential Cleaning Services</a></h4>
                                        <p>Duis congue atend lorem consequat interdum pretium ligula semper</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tp-about-service mb-30">
                                    <div class="tp-about-service-icon yellow-circle-shape mb-15">
                                        <i class="flaticon-business-and-trade"></i>
                                    </div>
                                    <div class="tp-about-service-text">
                                        <h4 class="tp-about-service-text-title mb-15 hover-theme-color"><a href="service.html">Commercial Cleaning Services</a></h4>
                                        <p>Duis congue atend lorem consequat interdum pretium ligula semper</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="tp-about-author mb-30">
                                    <div class="tp-about-author-img">
                                        <img src="assets/img/about/about-author.png" class="img-fluid" alt="img not found">
                                    </div>
                                    <div class="tp-about-author-text">
                                        <h4 class="tp-about-author-text-title">Daniel Martyn</h4>
                                        <span>CEO - Fetoxe</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tp-about-number mb-30">
                                    <div class="tp-about-number-icon">
                                        <i class="flaticon-phone-call-1"></i>
                                    </div>
                                    <div class="tp-about-number-text">
                                        <span>Free Consutacy</span>
                                        <a href="tel:02(552)6620808">02 (552) 662 0808</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end here -->

    <!-- brand area start here -->
    <div class="brand-area theme-dark-bg pt-100 pb-100">
        <div class="container">
            <div class="brand-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".3s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-1.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".6s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-2.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".9s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-3.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.2s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-4.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.5s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-5.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-1.png" class="img-fluid" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end here -->

    <!-- service area start here -->
    <section class="tp-services-area theme-dark-bg">
        <div class="tp-custom-container">
            <div class="tp-services-bg grey-bg pt-120 pb-90 z-index">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="tp-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".1s">
                                <h5 class="tp-section-subtitle common-yellow-shape mb-25">Our Popular Services</h5>
                                <h2 class="tp-section-title">Our Success Cleaning <br>Up your Mess</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="flaticon-pot"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service-details.html">Kitchen Cleaning</a></h4>
                                    <p class="mb-20">Bras fringilla conubia odios uira metus torquent commodo quam praesent torna pede</p>
                                    <div class="tp-services-text-link">
                                        <a href="service-details.html"><i class="flaticon-enter"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="flaticon-vacuum-cleaner"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service-details.html">Carpet Cleaning</a></h4>
                                    <p class="mb-20">Bras fringilla conubia odios uira metus torquent commodo quam praesent torna pede</p>
                                    <div class="tp-services-text-link">
                                        <a href="service-details.html"><i class="flaticon-enter"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="flaticon-house-cleaning"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service-details.html">House Cleaning</a></h4>
                                    <p class="mb-20">Bras fringilla conubia odios uira metus torquent commodo quam praesent torna pede</p>
                                    <div class="tp-services-text-link">
                                        <a href="service-details.html"><i class="flaticon-enter"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".8s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="flaticon-desk"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service-details.html">Office Cleaning</a></h4>
                                    <p class="mb-20">Bras fringilla conubia odios uira metus torquent commodo quam praesent torna pede</p>
                                    <div class="tp-services-text-link">
                                        <a href="service-details.html"><i class="flaticon-enter"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay="1s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="flaticon-cleaning"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service-details.html">Road Cleaning</a></h4>
                                    <p class="mb-20">Bras fringilla conubia odios uira metus torquent commodo quam praesent torna pede</p>
                                    <div class="tp-services-text-link">
                                        <a href="service-details.html"><i class="flaticon-enter"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay="1.2s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="flaticon-window"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service-details.html">Window Cleaning</a></h4>
                                    <p class="mb-20">Bras fringilla conubia odios uira metus torquent commodo quam praesent torna pede</p>
                                    <div class="tp-services-text-link">
                                        <a href="service-details.html"><i class="flaticon-enter"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end here -->

    <!-- Choose area start here -->
    <section class="tp-choose-area position-relative pt-120 pb-90">
        <div class="tp-choose-yellow-bg"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-8">
                    <div class="tp-choose z-index">
                        <div class="tp-section-title-wrapper mb-105 wow fadeInUp" data-wow-delay=".2s">
                            <h5 class="tp-section-subtitle common-yellow-shape common-white-shape mb-20">Why Choose Klenar</h5>
                            <h2 class="tp-section-title">Expert House Cleaning Service Can Trust</h2>
                        </div>
                        <div class="tp-choose-img mb-40 z-index d-block d-xl-none">
                            <img src="assets/img/about/choose-img-1.jpg" alt="img not found">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="tp-choose-timeline ml-15 mb-30">
                                    <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay=".4s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">Every Customer <br>is Special</a></h4>
                                        <p>Bras fringilla conubia odios metus torquent commodo quam </p>
                                    </div>
                                    <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay=".6s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">Customer Support <br>Live Chat</a></h4>
                                        <p>Bras fringilla conubia odios metus torquent commodo quam </p>
                                    </div>
                                    <div class="tp-choose-timeline-single pl-35 wow fadeInUp" data-wow-delay=".8s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">Enjoy Discounts <br>in Fees</a></h4>
                                        <p>Bras fringilla conubia odios metus torquent commodo quam </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tp-choose-timeline ml-15 mb-30">
                                    <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay="1s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">Book Appointment <br>in online</a></h4>
                                        <p>Bras fringilla conubia odios metus torquent commodo quam </p>
                                    </div>
                                    <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay="1.2s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">Information for Any <br>Services</a></h4>
                                        <p>Bras fringilla conubia odios metus torquent commodo quam </p>
                                    </div>
                                    <div class="tp-choose-timeline-single pl-35 wow fadeInUp" data-wow-delay="1.4s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">We Give 24/7 <br>Support</a></h4>
                                        <p>Bras fringilla conubia odios metus torquent commodo quam </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-12">
                    <div class="tp-choose-img mb-30 z-index d-none d-xl-block wow fadeInUp" data-wow-delay=".6s">
                        <img src="assets/img/about/choose-img-1.jpg" alt="img not found">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose area end here -->

    <!-- fact area start here -->
    <section class="tp-fact-area theme-dark-bg pt-75 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-fact mb-50 text-center wow fadeInUp" data-wow-delay=".2s">
                        <div class="tp-fact-icon mb-40">
                            <img src="assets/img/icon/fact-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-shuttle"></i>
                        </div>
                        <div class="tp-fact-text">
                            <h2 class="tp-fact-text-title white-color mb-20">2025</h2>
                            <h5 class="tp-fact-text-subtitle white-color">Project Completed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-fact mb-50 text-center wow fadeInUp" data-wow-delay=".4s">
                        <div class="tp-fact-icon mb-40">
                            <img src="assets/img/icon/fact-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-broom"></i>
                        </div>
                        <div class="tp-fact-text">
                            <h2 class="tp-fact-text-title white-color mb-20">3050</h2>
                            <h5 class="tp-fact-text-subtitle white-color">Dedicated Cleaner</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-fact mb-50 text-center wow fadeInUp" data-wow-delay=".6s">
                        <div class="tp-fact-icon mb-40">
                            <img src="assets/img/icon/fact-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-selection"></i>
                        </div>
                        <div class="tp-fact-text">
                            <h2 class="tp-fact-text-title white-color mb-20">8205</h2>
                            <h5 class="tp-fact-text-subtitle white-color">Satisfied Customer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-fact mb-50 text-center wow fadeInUp" data-wow-delay=".8s">
                        <div class="tp-fact-icon mb-40">
                            <img src="assets/img/icon/fact-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-badge"></i>
                        </div>
                        <div class="tp-fact-text">
                            <h2 class="tp-fact-text-title white-color mb-20">1232</h2>
                            <h5 class="tp-fact-text-subtitle white-color">International Awards</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact area end here -->

    <!-- pricing area start here -->
    <section class="tp-pricing-area pt-120 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="section-title-wrapper mb-55 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20">Our Affordable Package</h5>
                        <h2 class="tp-section-title">Special Pricing Package <br>No Hidden Charge</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav class="text-start text-md-end wow fadeInUp" data-wow-delay=".4s">
                        <div class="nav tp-pricing-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Monthly</button>
                          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Yearly</button>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="tp-pricing grey-bg text-center wow flipInY" data-wow-delay=".2s">
                                        <div class="tp-pricing-icon mb-40">
                                            <div class="tp-pricing-icon-inner">
                                                <i class="flaticon-mop"></i>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-rate">
                                            <div class="tp-pricing-rate-inner text-center">
                                                <h4 class="tp-pricing-rate-subtitle mb-30">Residential</h4>
                                                <h2 class="tp-pricing-rate-title mb-45"><span>$</span>25.00</h2>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-list mb-45">
                                            <ul>
                                                <li><i class="fas fa-check"></i> Carpet Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bathroom Cleaning</li>
                                                <li><i class="fas fa-check"></i> Floor Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bedroom Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="tp-pricing-btn">
                                            <a href="pricing.html" class="theme-btn"><i class="flaticon-enter"></i> Get Service</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="tp-pricing grey-bg text-center wow flipInY" data-wow-delay=".2s">
                                        <div class="tp-pricing-icon mb-40">
                                            <div class="tp-pricing-icon-inner">
                                                <i class="flaticon-cleaning-1"></i>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-rate">
                                            <div class="tp-pricing-rate-inner text-center">
                                                <h4 class="tp-pricing-rate-subtitle mb-30">Buildings</h4>
                                                <h2 class="tp-pricing-rate-title mb-45"><span>$</span>30.00</h2>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-list mb-45">
                                            <ul>
                                                <li><i class="fas fa-check"></i> Carpet Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bathroom Cleaning</li>
                                                <li><i class="fas fa-check"></i> Floor Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bedroom Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="tp-pricing-btn">
                                            <a href="pricing.html" class="theme-btn active"><i class="flaticon-enter"></i> Get Service</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="tp-pricing grey-bg text-center wow flipInY" data-wow-delay=".2s">
                                        <div class="tp-pricing-icon mb-40">
                                            <div class="tp-pricing-icon-inner">
                                                <i class="flaticon-vacuum-cleaner-1"></i>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-rate">
                                            <div class="tp-pricing-rate-inner text-center">
                                                <h4 class="tp-pricing-rate-subtitle mb-30">Commercial</h4>
                                                <h2 class="tp-pricing-rate-title mb-45"><span>$</span>45.00</h2>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-list mb-45">
                                            <ul>
                                                <li><i class="fas fa-check"></i> Carpet Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bathroom Cleaning</li>
                                                <li><i class="fas fa-check"></i> Floor Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bedroom Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="tp-pricing-btn">
                                            <a href="pricing.html" class="theme-btn"><i class="flaticon-enter"></i> Get Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="tp-pricing grey-bg text-center">
                                        <div class="tp-pricing-icon mb-40">
                                            <div class="tp-pricing-icon-inner">
                                                <i class="flaticon-mop"></i>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-rate">
                                            <div class="tp-pricing-rate-inner text-center">
                                                <h4 class="tp-pricing-rate-subtitle mb-30">Residential</h4>
                                                <h2 class="tp-pricing-rate-title mb-45"><span>$</span>55.00</h2>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-list mb-45">
                                            <ul>
                                                <li><i class="fas fa-check"></i> Carpet Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bathroom Cleaning</li>
                                                <li><i class="fas fa-check"></i> Floor Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bedroom Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="tp-pricing-btn">
                                            <a href="pricing.html" class="theme-btn"><i class="flaticon-enter"></i> Get Service</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="tp-pricing grey-bg text-center">
                                        <div class="tp-pricing-icon mb-40">
                                            <div class="tp-pricing-icon-inner">
                                                <i class="flaticon-cleaning-1"></i>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-rate">
                                            <div class="tp-pricing-rate-inner text-center">
                                                <h4 class="tp-pricing-rate-subtitle mb-30">Buildings</h4>
                                                <h2 class="tp-pricing-rate-title mb-45"><span>$</span>75.00</h2>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-list mb-45">
                                            <ul>
                                                <li><i class="fas fa-check"></i> Carpet Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bathroom Cleaning</li>
                                                <li><i class="fas fa-check"></i> Floor Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bedroom Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="tp-pricing-btn">
                                            <a href="pricing.html" class="theme-btn active"><i class="flaticon-enter"></i> Get Service</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="tp-pricing grey-bg text-center">
                                        <div class="tp-pricing-icon mb-40">
                                            <div class="tp-pricing-icon-inner">
                                                <i class="flaticon-vacuum-cleaner-1"></i>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-rate">
                                            <div class="tp-pricing-rate-inner text-center">
                                                <h4 class="tp-pricing-rate-subtitle mb-30">Commercial</h4>
                                                <h2 class="tp-pricing-rate-title mb-45"><span>$</span>95.00</h2>
                                            </div>
                                        </div>
                                        <div class="tp-pricing-list mb-45">
                                            <ul>
                                                <li><i class="fas fa-check"></i> Carpet Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bathroom Cleaning</li>
                                                <li><i class="fas fa-check"></i> Floor Cleaning</li>
                                                <li><i class="fas fa-check"></i> Bedroom Cleaning</li>
                                            </ul>
                                        </div>
                                        <div class="tp-pricing-btn">
                                            <a href="pricing.html" class="theme-btn"><i class="flaticon-enter"></i> Get Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing area end here -->

    <!-- testimonial area start here -->
    <section class="tp-testimonial-area position-relative">
        <div class="container">
            <div class="tp-testimonial-bg white-bg z-index">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="tp-testimonial-img">
                            <img src="assets/img/testimonial/testimonial-img-1.jpg" alt="img bot found">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="tp-testimonial ml-70">
                            <div class="section-title-wrapper">
                                <h5 class="tp-section-subtitle common-yellow-shape mb-20">Customer Statement</h5>
                                <h2 class="tp-section-title mb-20">Our Client Feedback</h2>
                            </div>
                            <div class="tp-testimonial-active swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="tp-testimonial-single swiper-slide z-index">
                                        <p class="mb-45">Erat dapibus interdum consequat eleifend. Porttitor iaculis per lectus ornare dolor pede. Metus urna faucibus montes duis conds imentum congue. Accumsan bibendum pharetra a quisque nulla dictumst quam praesent pharetra cos aptent sociosqu. Imperdiet mattis sociosqu differ frome aliquam.</p>
                                        <div class="tp-testimonial-author">
                                            <div class="tp-testimonial-author-img">
                                                <img src="assets/img/testimonial/testimonial-author-1.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-testimonial-author-text">
                                                <h4 class="tp-testimonial-author-text-name">Rich Gragory</h4>
                                                <span class="tp-testimonial-author-text-designation">Chief Marketing Manager</span>
                                            </div>
                                        </div>
                                        <div class="tp-testimonial-qoute">
                                            <img src="assets/img/icon/test-qoute.png" alt="img not found">
                                        </div>
                                    </div>
                                    <div class="tp-testimonial-single swiper-slide z-index">
                                        <p class="mb-45">Erat dapibus interdum consequat eleifend. Porttitor iaculis per lectus ornare dolor pede. Metus urna faucibus montes duis conds imentum congue. Accumsan bibendum pharetra a quisque nulla dictumst quam praesent pharetra cos aptent sociosqu. Imperdiet mattis sociosqu differ frome aliquam.</p>
                                        <div class="tp-testimonial-author">
                                            <div class="tp-testimonial-author-img">
                                                <img src="assets/img/testimonial/testimonial-author-2.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-testimonial-author-text">
                                                <h4 class="tp-testimonial-author-text-name">Jhon Doe</h4>
                                                <span class="tp-testimonial-author-text-designation">Chief Web Developer</span>
                                            </div>
                                        </div>
                                        <div class="tp-testimonial-qoute">
                                            <img src="assets/img/icon/test-qoute.png" alt="img not found">
                                        </div>
                                    </div>
                                    <div class="tp-testimonial-single swiper-slide z-index">
                                        <p class="mb-45">Erat dapibus interdum consequat eleifend. Porttitor iaculis per lectus ornare dolor pede. Metus urna faucibus montes duis conds imentum congue. Accumsan bibendum pharetra a quisque nulla dictumst quam praesent pharetra cos aptent sociosqu. Imperdiet mattis sociosqu differ frome aliquam.</p>
                                        <div class="tp-testimonial-author">
                                            <div class="tp-testimonial-author-img">
                                                <img src="assets/img/testimonial/testimonial-author-3.jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-testimonial-author-text">
                                                <h4 class="tp-testimonial-author-text-name">Shon Toy</h4>
                                                <span class="tp-testimonial-author-text-designation">Chief Marketing Officer</span>
                                            </div>
                                        </div>
                                        <div class="tp-testimonial-qoute">
                                            <img src="assets/img/icon/test-qoute.png" alt="img not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="tp-testimonial-slider-arrow">
                    <div class="testimonial-button-next slide-next"><i class="far fa-chevron-right"></i></div>
                    <div class="testimonial-button-prev slide-prev"><i class="far fa-chevron-left"></i></div>
                </div>
            </div>
        </div>
        <div class="tp-testimonial-shape"></div>
    </section>
    <!-- testimonial area end here -->

    <!-- project area start here -->
    <section class="tp-project-area white-bg position-relative">
        <div class="tp-project-shape"></div>
        <div class="tp-project-wrapper grey-bg pt-120 wow fadeInUp" data-wow-delay=".2s">
            <div class="section-title-wrapper text-center mb-55 grey-bg">
                <h5 class="tp-section-subtitle common-yellow-shape mb-20">Some Completed Project</h5>
                <h2 class="tp-section-title mb-20">Every Project is Different <br>Every Client special</h2>
            </div>
            <div class="tp-project-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tp-project-img">
                            <img src="assets/img/project/project-1.jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Residential Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Bathroom Cleaning</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="tp-project-img">
                            <img src="assets/img/project/project-2.jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Residential Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Kitchen Cleaning</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="tp-project-img">
                            <img src="assets/img/project/project-3.jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Residential Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Room Cleaning</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay="1s">
                        <div class="tp-project-img">
                            <img src="assets/img/project/project-4.jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Residential Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Office Cleaning</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="tp-project-img">
                            <img src="assets/img/project/project-4.jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Residential Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Door Cleaning</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project area end here -->

    <!-- progress area start here -->
    <section class="tp-progress-area pt-90">
        <div class="tp-progress-area-inner position-relative pt-25">
            <div class="tp-progress-shape">
                <img src="assets/img/project/progress-bg.jpg" alt="img not found">
            </div>
            <div class="container z-index">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-progress-img pt-75 mb-30">
                            <img src="assets/img/project/progress-img-1.jpg" alt="img not found">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-progress-text mb-30">
                            <div class="section-title-wrapper">
                                <h5 class="tp-section-subtitle common-yellow-shape mb-25">Our work Experience</h5>
                                <h2 class="tp-section-title mb-25">Find Standard Cleaning <br>with Personal Touch</h2>
                            </div>
                            <p class="mb-40">Duis nunc sodales conubia aid laoreet aliquet nostra eleifend lacinias prasent hendrerit quisque penatibus erat. At pulvinar integer semper ridiculus lectuse condimentum obor tise verodar capmtaso morin proin nibh posuere. </p>
                            <div class="tp-skill--content">
                                <div class="tp-skill__wrapper mb-45">
                                    <div class="tp-skill--title__wrapper">
                                        <h5 class="tp-skill--title">Repair Quality</h5>
                                        <span style="left:90%">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" style="width: 90%; visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
                                    </div>
                                </div>
                                <div class="tp-skill__wrapper mb-45">
                                    <div class="tp-skill--title__wrapper">
                                        <h5 class="tp-skill--title">Happy Customer</h5>
                                        <span style="left:80%">80%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" style="width: 80%; visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
                                    </div>
                                </div>
                                <div class="tp-skill__wrapper">
                                    <div class="tp-skill--title__wrapper">
                                        <h5 class="tp-skill--title">Support Centre</h5>
                                        <span style="left:90%">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" style="width: 90%; visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- progress area end here -->

    <!-- blog area start here -->
    <section class="tp-blog-area pt-90 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20">Some Recent Articls</h5>
                        <h2 class="tp-section-title mb-25">Work Together to Create <br>Something Greater</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tp-blog mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tp-blog-img mb-25">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-img-1.jpg" class="img-fluid" alt="img not found"></a>
                            <span class="tp-blog-badge">Home Cleaning</span>
                        </div>
                        <div class="tp-blog-text">
                            <div class="tp-blog-meta mb-10">
                                <ul>
                                    <li><a href="blog-details.html">// By Jhon Cardo</a></li>
                                    <li><a href="blog-details.html">// Jun 02 - 2021</a></li>
                                </ul>
                            </div>
                            <h4 class="tp-blog-title mb-20"><a href="blog-details.html">Parturient hac pulvinar enim sages sollicitudin mamco</a></h4>
                            <div class="tp-blog-link">
                                <a href="blog-details.html"><i class="flaticon-enter"></i> Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-blog mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="tp-blog-img mb-25">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-img-2.jpg" class="img-fluid" alt="img not found"></a>
                            <span class="tp-blog-badge">Home Cleaning</span>
                        </div>
                        <div class="tp-blog-text">
                            <div class="tp-blog-meta mb-10">
                                <ul>
                                    <li><a href="blog-details.html">// By Jhon Cardo</a></li>
                                    <li><a href="blog-details.html">// Jun 04 - 2021</a></li>
                                </ul>
                            </div>
                            <h4 class="tp-blog-title mb-20"><a href="blog-details.html">Baoreet curae placerat amet class rempus over curpise</a></h4>
                            <div class="tp-blog-link">
                                <a href="blog-details.html"><i class="flaticon-enter"></i> Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-blog mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="tp-blog-img mb-25">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-img-3.jpg" class="img-fluid" alt="img not found"></a>
                            <span class="tp-blog-badge">Home Cleaning</span>
                        </div>
                        <div class="tp-blog-text">
                            <div class="tp-blog-meta mb-10">
                                <ul>
                                    <li><a href="blog-details.html">// By Jhon Cardo</a></li>
                                    <li><a href="blog-details.html">// Jun 06 - 2021</a></li>
                                </ul>
                            </div>
                            <h4 class="tp-blog-title mb-20"><a href="blog-details.html">Dapibus iaculis curae in tristique fermen venenatis cidun</a></h4>
                            <div class="tp-blog-link">
                                <a href="blog-details.html"><i class="flaticon-enter"></i> Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end here -->

</main>
@endsection()


