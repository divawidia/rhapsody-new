@extends('layouts.app')

@section('title')
    Artikel | LPK Rhapsody Hospitality Development Center
@endsection

@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div
      class="breadcumb-wrapper d-flex align-items-center"
      style="background: url('/img/bg/top-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;"
    >
      <div class="container z-index-common">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title" data-aos="fade-up" data-aos-duration="1000">Blogs, News & Events<FONT COLOR="#CE5423">.</FONT></h1>
        </div>
      </div>
    </div>
    <!--==============================
    Articles area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-8">
                    @if($posts->count() > 0)
                        @foreach($posts as $post)
                        <div class="vs-blog blog-single">
                            <div class="blog-img">
                                <img class="w-100" src="{{ Storage::url($post->thumbnail_photo ?? '') }}" alt="Blog Image">
                                <a href="#" class="blog-date">
                                    @php $created_date = strtotime($post->created_at) @endphp
                                    <span class="day">{{ date("d",$created_date) }}</span>
                                    <span class="month">{{ date("F",$created_date) }}</span>
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="{{ route('blogs-news-events-user', $post->user->name) }}"><i class="fal fa-user"></i>By {{ $post->user->name }}</a>
                                    <a href="#"><i class="fal fa-eye"></i>{{ views($post)->count() }} Views</a>
                                </div>
                                <h2 class="blog-title"><a href="{{ route('blogs-news-events-detail', $post->slug) }}">{{ $post->title }}</a></h2>
                                <p>@php echo \Illuminate\Support\Str::limit($post->body, 300); @endphp</p>
                                <a href="{{ route('blogs-news-events-detail', $post->slug) }}" class="vs-btn style3"><i class="fa-solid fa-chevron-right"></i>Read More</a>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <div class="row mt-5">
                            <h2 class="card-title text-center">Tidak Ada Data Artikel</h2>
                        </div>
                    @endif
                    <div class="vs-pagination">
                        {{ $posts->links() }}
{{--                        <ul>--}}
{{--                            <li class="prev"><a href="#">Sebelumnya</a></li>--}}
{{--                            <li><a href="#">1</a></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">.....</a></li>--}}
{{--                            <li><a href="#">10</a></li>--}}
{{--                            <li class="next"><a href="#">Selenjutnya</a></li>--}}
{{--                        </ul>--}}
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
                                @if($posts->count() > 0)
                                    @foreach($recent_posts as $post)
                                        <div class="recent-post">
                                            <div class="media-img"><img src="{{ Storage::url($post->thumbnail_photo ?? '') }}" alt="thing"></div>
                                            <div class="media-body">
                                                <h4 class="post-title"><a class="text-inherit" href="{{ route('blogs-news-events-detail', $post->slug) }}">{{ $post->title }}</a></h4>
                                                <div class="recent-post-meta"><a href="#">{{ date("d F, Y",$created_date) }}</a></div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="row mt-5">
                                        <h3 class="card-title text-center">Tidak Ada Data Artikel</h3>
                                    </div>
                                @endif
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
