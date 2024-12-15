@extends('layouts.app')

@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="{{asset("assets/img/slider/breadcrumb-bg-1.jpg")}}">
        {{-- <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">Blog <span>Details</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Blog Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- breadcrumb area end -->

    <!-- blog details area start here -->
    <section class="blog-details-area pt-120 pb-70">
        <div class="container">
            <div class="tp-custom-container-box">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog__details--wrapper mr-50 mb-50">
                            <div class="ablog ablog-4 mb-55">
                                <div class="ablog__img wow fadeInUp">
                                    <img src="{{$article->getImage()}}" class="img-fluid" alt="{{$article->title}}">
                                </div>
                                <div class="ablog__text ablog__text4">
                                    <div class="ablog__meta ablog__meta4">
                                        <ul>
                                            <li><a href="blog-details.html"><i class="far fa-calendar-check"></i>{{$article->getDate()}}</a></li>
                                            <li><a href="blog-details.html"><i class="fal fa-comments"></i>Comments {{$article->comments->count()}}</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="ablog__text--title4 mb-20"><a href="blog-details.html">{{$article->title}}</a></h3>
                                    <p class="mb-30">{{$article->descripshion}}</p>
                                    <p class="mb-30">{{$article->short_description}}</p>
                                </div>
                            </div>

                            <div class="post-comments mb-95 wow fadeInUp">
                                <div class="post-comment-title mb-40">
                                    <h3>Comments {{$article->comments->count()}}</h3>
                                </div>
                                        @foreach ($article->comments as $comment)
                                            <div class="latest-comments">
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/blog/b11.jpg" class="img-fluid" alt="img">
                                                </div>
                                                <div class="comments-text">
                                                    <div class="avatar-name">
                                                        <h5>{{$comment->name}}</h5>
                                                    </div>
                                                    <p>{{$comment->comment}}</p>
                                                    <a href="#" class="comment-reply"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                            </div>
                                        @endforeach
                            </div>

                            <div class="post-comment-form wow fadeInUp">
                                <h4>Leave a Reply </h4>
                                <span>Your email address will not be published.</span>
                                <form action="{{route('app.article.add-comment', $article)}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="post-input">
                                                <textarea  name="comment" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="post-input">
                                                <input type="text" name="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="post-input">
                                                <input type="email" name="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ablog__sidebar mb-50">
                            <div class="widget wow fadeInUp">
                                <div class="sidebar--widget__search mb-45">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widget mb-45 wow fadeInUp">
                                <h3 class="sidebar__widget--title mb-30">Recent News </h3>
                                <div class="sidebar--widget__post mb-20">
                                    <div class="sidebar__post--thumb">
                                        <a href="blog-details.html">
                                            <div class="post__img" data-background="assets/img/blog/b1.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="sidebar__post--text">
                                        <h4 class="sidebar__post--title"><a href="blog-details.html">Businesses Are Thriving <br>Societies Are Not.</a></h4>
                                        <span>January 15, 2021</span>
                                    </div>
                                </div>
                                <div class="sidebar--widget__post mb-20">
                                    <div class="sidebar__post--thumb">
                                        <a href="blog-details.html">
                                            <div class="post__img" data-background="assets/img/blog/b2.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="sidebar__post--text">
                                        <h4 class="sidebar__post--title"><a href="blog-details.html">The Importance of Instagram <br>Metrics and</a></h4>
                                        <span>January 15, 2021</span>
                                    </div>
                                </div>
                                <div class="sidebar--widget__post mb-20">
                                    <div class="sidebar__post--thumb">
                                        <a href="blog-details.html">
                                            <div class="post__img" data-background="assets/img/blog/b7.jpg"></div>
                                        </a>
                                    </div>
                                    <div class="sidebar__post--text">
                                        <h4 class="sidebar__post--title"><a href="blog-details.html">TikTok Influencer Marketing: <br>How to Work</a></h4>
                                        <span>January 15, 2021</span>
                                    </div>
                                </div>
                            </div>

                            <div class="widget mb-40 wow fadeInUp">
                                <h3 class="sidebar__widget--title mb-25">Categories</h3>
                                <div class="sidebar--widget__cat mb-20">
                                    <ul>
                                        <li><a href="blog-details.html">App & Saas</a></li>
                                        <li><a href="blog-details.html">Fresh Products</a></li>
                                        <li><a href="blog-details.html">Graphics</a></li>
                                        <li><a href="blog-details.html">IOS/Android Design</a></li>
                                        <li><a href="blog-details.html">Saas Design</a></li>
                                        <li><a href="blog-details.html">Web Design</a></li>
                                        <li><a href="blog-details.html">Web Development</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget mb-25 wow fadeInUp">
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
    <!-- blog details area end here -->

</main>

@endsection
