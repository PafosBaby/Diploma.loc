    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <header>
        <div class="tp-header-area">
            <div class="tp-header-top theme-dark-bg pt-20 pb-50 d-none d-xl-block">
                <div class="tp-custom-container">
                    <div class="row align-items-center">
                        <div class="col-xxl-4 col-xl-5">
                            <div class="tp-header-top-info">
                                <div class="tp-header-top-info-single pr-20 mr-40">
                                    <div class="tp-header-top-info-single-text">
                                        @auth
                                        @hasanyrole('admin|manager|author')
                                        <a href= "{{route('admin')}}" >{{__('Сonsole')}}</a>
                                        @endhasanyrole
                                        <form action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <a href= "#" onclick="event.preventDefault();this.closest('form').submit();" >{{__("Exit")}}</a>
                                        </form>
                                        @else
                                        <a href= "{{route('register')}}">{{__("Registration")}}</a>
                                        <a href= "{{route('login')}}" >{{__("login")}}</a>
                                        @endauth
                                    </div>
                                </div>
                                <div class="tp-header-top-info-single  pr-10 mr-10 border-right-1">
                                    <div class="tp-header-top-info-single-text">
                                        <a href= "{{route("app.change-locale", "en")}}" @if(app()->getLocale('lang') == 'en') class = "active" style ="color: #fed10c;" @endif>EN</a>
                                    </div>
                                </div>
                                <div class="tp-header-top-info-single  mr-100">
                                    <div class="tp-header-top-info-single-text">
                                        <a href= "{{route("app.change-locale", "ru")}}" @if(app()->getLocale('lang') == 'ru') class = "active" style ="color: #fed10c;" @endif>RU</a>
                                    </div>
                                </div>
                                <div class="tp-header-top-info-single-icon mr-20 ">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="tp-header-top-info-single-text">
                                    <span class="tp-header-top-info-single-label">{{__("Email")}}</span>
                                    <a href="mailto:info@klenar.com" class="tp-header-top-info-single-content font-medium">info@klenar.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-2">
                            <div class="header-logo text-center">
                                <a href="index.html"><img src="{{asset('assets/img/logo/logo-white.png')}}" class="img-fluid" alt="logo not found"></a>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5">
                            <div class="tp-header-top-info justify-content-end">
                                <div class="tp-header-top-info-single mr-85">
                                    <div class="tp-header-top-info-single-icon tp-header-top-info-single-icon-call mr-10">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="tp-header-top-info-single-text">
                                        <span class="tp-header-top-info-single-label">{{__("Free Call")}}</span>
                                        <a href="tel:33388820055" class="tp-header-top-info-single-content font-medium">8(328)125 125</a>
                                    </div>
                                </div>
                                <div class="tp-header-top-info-single">
                                    <div class="tp-header-top-info-single-btn">
                                        <a href="{{route('cart')}}" class="yellow-btn" id="header-cart-info-two"><i class="flaticon-enter"></i> {{__("Cart")}} ({{$cartItems}})</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tp-header-menu-area tp-transparent-header-menu header-sticky">
                <div class="container">
                    <div class="row justify-content-xl-center align-items-center">
                        <div class="col-xl-2 col-8 tp-sticky-column">
                            <div class="tp-sticky-logo">
                                <a href="index.html"><img src="assets/img/logo/logo-blue.png" class="img-fluid" alt="logo not found"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-4">
                            <div class="tp-main-menu-bg">
                                <div class="tp-main-menu">
                                    <nav id="tp-mobile-menu">
                                        <ul class="text-center">
                                            <li class="menu-item-has-children"><a href="{{route('app.home')}}">{{__("Home")}}</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="">{{__("Blog")}}</a>
                                                <ul class="sub-menu">
                                                    @foreach ($categories as $cat)
                                                    <li>
                                                        <a href="{{route('app.blog.category', $cat->slug)}}">
                                                            {{$cat->name}}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="{{route('app.catalog')}}">{{__("Shop")}}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu activation -->
                                <div class="side-menu-icon d-xl-none text-end">
                                    <button class="side-toggle"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 tp-sticky-column-btn">
                            <div class="tp-sticky-btn text-end">
                                <a href="{{route('cart')}}" id="header-cart-info" class="theme-btn justify-content-end"><i class="flaticon-enter"></i> {{__("Cart")}} ({{$cartItems}})</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- mobile menu info -->
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="tp-mobile-menu"></div>
                <div class="contact-infos mb-30">
                    <div class="contact-list mb-30">
                        <h4>{{__("Contact")}}</h4>
                        <ul>
                            <li><i class="flaticon-pin"></i>{{__("Lejeune'23, Novosibirsk")}}</li>
                            <li><i class="flaticon-email"></i><a href="">info@klenar.com</a></li>
                            <li><i class="flaticon-phone-call"></i><a href="">8(328)125 125</a></li>
                        </ul>
                        <div class="sidebar__menu--social">
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
    <div class="offcanvas-overlay"></div>
    <!-- mobile menu info -->
