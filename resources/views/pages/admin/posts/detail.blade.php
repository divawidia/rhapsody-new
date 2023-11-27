@extends('layouts.admin.master')
@section('title')
    Detail Artikel
@endsection
@section('page-title')
    Detail Artikel
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="row py-3">
                    <div class="col-6">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary w-auto"><i class="fa fa-arrow-left"></i>  Kembali</a>
                    </div>
                    <div class="col-6">
                        <div class="btn-toolbar float-end" role="toolbar">
                            <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-success me-1" data-toggle="tooltip" data-placement="bottom" title="Edit Artikel"><i class="fa fa-edit"></i></a>

                            <a href="{{ route('posts.destroy', ['post' => $post]) }}" class="btn btn-danger me-1" data-toggle="tooltip" data-placement="bottom" title="Hapus Artikel" data-confirm-delete="true"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-detail mt-3" dir="ltr">
                                            <div class="p-3">
                                                <h1 class="mb-3">
                                                    <a href=" " class="text-dark">{{ $post->title }}</a>
                                                </h1>
                                                <div class="product-img bg-light rounded p-3">
                                                    <img
                                                        src="{{ Storage::url($post->thumbnail_photo ?? '') }}"
                                                        class="img-fluid" width="1500px"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3 mt-xl-3 ps-xl-5">
                                            <div class="text-muted mt-2">
                                                @foreach($post->tags as $tag)
                                                    <span class="badge badge-soft-primary font-size-14 me-1">{{ $tag->tag_name }}</span>
                                                @endforeach
                                            </div>
                                            <div class="text-muted mt-4">
                                                @php echo $post->body @endphp
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="mt-4 py-1 row">
                                    <h5 class="col-md-5 font-size-14">Dibuat oleh :</h5>
                                    <p class="col-md-7">{{ $post->user->name }}</p>
                                </div>
                                <div class="py-1 row">
                                    <h5 class="col-md-5 font-size-14">Tanggal Dibuat:</h5>
                                    @php $created_date = strtotime($post->created_at) @endphp
                                    <p class="col-md-7">{{ date('D, M d, Y',$created_date) }}</p>
                                </div>
                                <div class="py-1 row">
                                    <h5 class="col-md-5 font-size-14">Update Terakhir:</h5>
                                    @php $updated_date = strtotime($post->updated_at) @endphp
                                    <p class="col-md-7">{{ date('D, M d, Y',$updated_date) }}</p>
                                </div>
                                <div class="py-1 row">
                                    <h5 class="col-md-5 font-size-14">Status Artikel:</h5>
                                    <div class="col-md-7">
                                        @if($post->status == 1)
                                            <span class="badge badge-soft-success mb-0">Published</span>
                                        @elseif($post->status == 0)
                                            <span class="badge badge-soft-secondary mb-0">Private</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    @endsection
