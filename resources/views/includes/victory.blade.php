<section style="
        background-image: url({{ Storage::url($victory->victory_section_bg) }});
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: 70%">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start" style="padding-bottom: 150px">
            <div class="col-lg-5 col-xl-6 space-extra text-start px-4">
                <img class="mb-5" src="/img/logo-victory2.png" alt="logo-victory" data-aos="fade-up"
                     data-aos-duration="1000">
                <h2 class="sec-title3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    {{ $victory->victory_section_title }}
                </h2>
                <p class="fs-md text-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                {!! $victory->victory_section_body !!}
                <div class="hero-btns" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <a href="{{ $victory->victory_section_btn_url }}" class="btn vs-btn style6"
                       style="background-color: var(--theme-color); color: white; border: 0; padding: 10px 30px;">
                        <img src="{{ Storage::url($victory->victory_section_btn_icon) }}">
                        {{ $victory->victory_section_btn_text }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
