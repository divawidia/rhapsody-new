<section class="space-extra-top space-extra-bottom">
    <div class="container">
        <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
            <h2 class="sec-title h1 text-uppercase"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-anchor-placement="top-bottom"
                data-aos-delay="200">
                Alumni Kami Telah Bekerja Di:
            </h2>
        </div>
        <div class="row mt-5">
            @foreach($companies as $company)
                <div class="col-6 col-lg-4 col-xl-3"
                     data-aos="fade-up"
                     data-aos-duration="1000"
                     data-aos-anchor-placement="top-bottom"
                     data-aos-delay="100">
                    <div class="brand-style1">
                        <a href="{{ $company->url }}">
                            <img src="{{ Storage::url($company->company_logo_url) }}" alt="{{ $company->company_logo_alt }}"/>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <span class="sec-subtitle text-center mt-3"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-anchor-placement="top-bottom"
              data-aos-delay="900">
            ... dan masih banyak lagi
        </span>
    </div>
</section>
