<section>
    <div class="card_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="owl-carousel slider_carousel">
                        @foreach(getTestimonyData() as $testimony)
                            <div class="row d-flex align-items-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                                <div class="col-6 position-relative">
                                    <div class="testi-img mt-3">
                                        <img class="w-100" src="{{ Storage::url($testimony->photo_url) }}" alt="{{ $testimony->name }}"/>
                                    </div>
                                    <img src="/img/icon/quotation.png" alt="quotation" class="w-25 position-absolute top-0 quotation-img translate-middle pt-5">
                                </div>
                                <div class="col-6">
                                    <h3 class="h5 pt-5 testi-content">
                                        <a class="text-inherit">
                                            @php echo $testimony->testimony @endphp
                                        </a>
                                    </h3>
                                    <div class="bottom-0 position-fixed testi-footer">
                                        <div class="mx-auto testi-subtitle">
                                            {{ $testimony->name }}
                                        </div>
                                        <div class="mx-auto testi-text">
                                            {{ $testimony->company }} - {{ $testimony->position }}
                                        </div>
                                        <div class="mx-auto testi-text">
                                            {{ $testimony->onboard_year }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('addon-script')
    <script>
        function slider_carouselInit() {
            $('.owl-carousel.slider_carousel').owlCarousel({
                dots: false,
                rewind: true,
                autoplay: true,
                nav: true,
                navText: ["<img src='/img/icon/left.png'>", "<img src='/img/icon/next.png'>"],
                responsive: {
                    0: {
                        items: 1
                    }
                }
            });
        }

        slider_carouselInit();
    </script>
@endpush
