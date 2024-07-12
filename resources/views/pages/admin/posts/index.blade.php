@extends('layouts.admin.master')
@section('title')
    Artikel Post
@endsection
@section('page-title')
    Artikel Post
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <h5 class="card-title">Daftar Artikel Post</h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                    <div>
                        <a href="{{ route('posts.create') }}" class="btn btn-primary"><i class="bx bx-plus me-1"></i> Tambah Artikel Post</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($posts->count() > 0)
            <div class="row mt-2">
                @foreach($posts as $post)
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ Storage::url($post->thumbnail_photo ?? '') }}" alt=""
                                             class="img-thumbnail">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">{{ $post->title }}</a></h5>
                                    @foreach($post->tags as $tag)
                                        <span class="badge badge-soft-primary mb-0">{{ $tag->tag_name }}</span>
                                    @endforeach
                                </div>
                                <div class="mt-2">
                                    @if($post->status == 1)
                                        <span class="badge badge-soft-success mb-0">Published</span>
                                    @elseif($post->status == 0)
                                        <span class="badge badge-soft-secondary mb-0">Private</span>
                                    @endif
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    @php echo \Illuminate\Support\Str::limit($post->body, 200); @endphp
                                </p>

                                <div class="mt-3 pt-1">
                                    <p class="mb-0"><i class="bx bx-user font-size-15 align-middle pe-2 text-primary"></i>
                                        {{ $post->user->name }}
                                    </p>
                                    <p class="mb-0 mt-2"><i class="bx bx-calendar font-size-15 align-middle pe-2 text-primary"></i>
                                        {{ $post->created_at }}
                                    </p>
                                </div>

                                <div class="d-flex justify-content-center gap-2 pt-4">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success me-1 w-100" data-toggle="tooltip" data-placement="bottom" title="Edit Artikel"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-primary me-1 w-100" data-toggle="tooltip" data-placement="bottom" title="Lihat Artikel"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger me-1 w-100" data-toggle="tooltip" data-placement="bottom" title="Hapus Artikel" data-confirm-delete="true"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row mt-5">
                <h2 class="card-title text-center">Tidak Ada Data Artikel Saat Ini</h2>
            </div>
        @endif
    @endsection
