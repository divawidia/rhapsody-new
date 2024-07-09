@extends('layouts.app')

@section('title')
    Fasilitas | Rhapsody Hospitality Development Center
@endsection

@section('content')
    <div class="breadcumb-wrapper d-flex align-items-center"
        style="background: url({{ Storage::url($facilityPageData->header_bg) }});
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title" data-aos="fade-up" data-aos-duration="1000">@php echo $facilityPageData->header_title @endphp</h1>
            </div>
        </div>
    </div>
    @foreach($facilities as $facility)
        <section class="py-5">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="picture-box7">
                                @php $i = 1 @endphp
                                @foreach($facility->facility_photo as $photo)
                                    <div class="picture-{{ $i }} mega-hover"
                                         data-aos="fade-up"
                                         data-aos-duration="1000"
                                         data-aos-anchor-placement="top-bottom">
                                        <img src="{{ Storage::url($photo->photo_url) }}" alt="About Img"/>
                                    </div>
                                    @php $i++ @endphp
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="about-box3">
                                <div class="title-area">
                                    <span class="sec-subtitle"
                                        data-aos="fade-up"
                                        data-aos-duration="1000"
                                        data-aos-delay="100">
                                        {{ $facility->subtitle }}
                                    </span>
                                    <h2 class="about-title h1"
                                        data-aos="fade-up"
                                        data-aos-duration="1000"
                                        data-aos-delay="200">
                                        {{ $facility->title }}
                                    </h2>
                                </div>
                                <div class="about-content"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="300">
                                    <p class="fs-md pt-5">
                                        @php echo $facility->long_decription @endphp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
