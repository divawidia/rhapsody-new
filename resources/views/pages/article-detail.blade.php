@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div
      class="breadcumb-wrapper style2 d-flex align-items-center"
      style="background: url('/img/bg/top-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;"
    >
      <div class="container z-index-common">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title style2" data-aos="fade-up" data-aos-duration="1000">{{ $post->title }}<FONT COLOR="#CE5423">.</FONT></h1>
        </div>
      </div>
    </div>
    <!--==============================
    Articles area
    ==============================-->
    <section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <img class="w-100" src="{{ Storage::url($post->thumbnail_photo ?? '') }}" alt="Blog Image">
                            @php $created_date = strtotime($post->created_at) @endphp
                            <a href="#" class="blog-date"><span class="day">{{ date("d",$created_date) }}</span><span class="month">{{ date("F",$created_date) }}</span></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ route('blogs-news-events-user', $post->user->name) }}"><i class="fal fa-user"></i>By {{ $post->user->name }}</a>
                                <a href="#"><i class="fal fa-eye"></i>{{ views($post)->count() }} Views</a>
                            </div>
                            <h2 class="blog-title">{{ $post->title }}</a></h2>
                            <div>
                                @php echo $post->body @endphp
                            </div>
                        </div>
                        <div class="share-links clearfix  ">
                            <div class="row justify-content-between">
                                <div class="col-xl-auto"><span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
{{--                                        @php dd($post->tags) @endphp--}}
                                        @foreach($post->tags as $tag)
                                            <a href="{{ route('blogs-news-events-tag', $tag->slug) }}">{{ $tag->tag_name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-xl-auto text-xl-end">
                                    <span class="share-links-title">Share:</span>
                                    <ul class="social-links">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- Post Pagination Style -->
{{--                        <div class="post-pagination   ">--}}
{{--                            <div class="row justify-content-between align-items-md-center">--}}
{{--                                <div class="col">--}}
{{--                                    <div class="post-pagi-box prev">--}}
{{--                                        <a href="blog.html"><i class="fas fa-chevron-left"></i></a>--}}
{{--                                        <h4 class="pagi-title"><a href="blog.html">Tadit Soul Can Tech Us About Web Docan</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <div class="post-pagi-box next">--}}
{{--                                        <a href="blog.html"><i class="fas fa-chevron-right"></i></a>--}}
{{--                                        <h4 class="pagi-title"><a href="blog.html">Why Soul Can Tech Us About Marketing</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            <h3 class="widget_title">Cari Artikel</h3>
                            <form class="search-form">
                                <input type="text" placeholder="Search Keyword">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories    ">
                            <h3 class="widget_title">Kategori</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li> <a href="{{ route('blogs-news-events-category', $category->slug) }}">{{ $category->category_name }}</a> <span>{{ $category->posts->count() }}</span> </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget   ">
                            <h3 class="widget_title">Artikel Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach($recent_posts as $post)
                                    <div class="recent-post">
                                        <div class="media-img"><img src="{{ Storage::url($post->thumbnail_photo ?? '') }}" alt="thing"></div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit" href="{{ route('blogs-news-events-detail', $post->slug) }}">{{ $post->title }}</a></h4>
                                            <div class="recent-post-meta"><a href="#">{{ date("d F, Y",$created_date) }}</a></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget widget_meta   ">
                            <h3 class="widget_title">Tag</h3>
                            <ul>
                                @foreach($tags as $tag)
                                    <li><a href="{{ route('blogs-news-events-tag', $tag->slug) }}">{{ $tag->tag_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
