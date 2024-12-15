@extends('layouts.app')

@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="{{asset('assets/img/slider/breadcrumb-bg-1.jpg')}}">
        {{-- <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title" style="color: aliceblue">{{$category->name}}</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Blog Sidebar</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- breadcrumb area end -->

    <!-- blog area start here -->
    <section class="blog-sidebar-area pt-120 pb-110">
        <div class="container">
            <div class="tp-custom-container-box">
                <div class="row">
                    @foreach ($category->articles->where('is_active', 1) as $article)
                    <div class="col-lg-8">
                        <div class="ablog__sidebar--wrapper mr-50">
                            <div class="ablog ablog-4 mb-55 wow fadeInUp" data-wow-delay=".4s">
                                <div class="ablog__img">
                                    <img src="{{$article->getImage()}}" class="img-fluid" alt="{{$article->title}}">
                                </div>
                                <div class="ablog__text ablog__text4">
                                    <div class="ablog__meta ablog__meta4">
                                        <ul>
                                            <li><a href=""><i class="far fa-calendar-check">{{$article->getDate()}}</i></a></li>
                                            <li><a href="blog-details.html"> <i class="far fa-user"></i> Klenar </a></li>
                                            <li><a href="blog-details.html"> <i class="fal fa-comments"></i> No Comments</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="ablog__text--title4 mb-20">
                                        <a href="{{route('app.blog.article', [$category->slug, $article->slug])}}">{{$article->title}}</a>
                                    </h3>
                                    <p class="mb-30">{{$article->short_description}}</p>
                                    <div class="ablog__btn4">
                                        <a href="{{route('app.blog.article', [$category->slug, $article->slug])}}" class="theme-btn"><i class="flaticon-enter"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-4">
                        <div class="ablog__sidebar">
                            <div class="widget wow fadeInUp"  data-wow-delay=".3s">
                                <div class="sidebar--widget__search mb-45">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widget mb-40 wow fadeInUp"  data-wow-delay=".7s">
                                <h3 class="sidebar__widget--title mb-25">Categories</h3>
                                <div class="sidebar--widget__cat mb-20">
                                    <ul>
                                        <li><a href="blog-details.html"></a></li>
                                        <li><a href="blog-details.html">Fresh Products</a></li>
                                        <li><a href="blog-details.html">Graphics</a></li>
                                        <li><a href="blog-details.html">IOS/Android Design</a></li>
                                        <li><a href="blog-details.html">Saas Design</a></li>
                                        <li><a href="blog-details.html">Web Design</a></li>
                                        <li><a href="blog-details.html">Web Development</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget mb-25 wow fadeInUp"  data-wow-delay=".9s">
                                <h3 class="sidebar__widget--title mb-30">Tags</h3>
                                <div class="sidebar--widget__tag mb-20">
                                    <a href="blog-details.html">Animation</a>
                                    <a href="blog-details.html">Branding</a>
                                    <a href="blog-details.html">Design</a>
                                    <a href="blog-details.html">Ideas</a>
                                    <a href="blog-details.html">Landing</a>
                                    <a href="blog-details.html">Pix Saas Blog</a>
                                    <a href="blog-details.html">The Saas</a>
                                    <a href="blog-details.html">UI/UX</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end here -->

</main>

@endsection
