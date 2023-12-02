<script src="/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Slick Slider -->
<script src="/js/slick.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<!-- Wow.js Animation -->
<script src="/js/wow.min.js"></script>
<!-- Magnific Popup -->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!-- Main Js File -->
<script src="/js/main.js"></script>

<script src="https://kit.fontawesome.com/bec8d97be0.js" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="/build/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
{{--<script src="{{ URL::asset('build/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>--}}
<script src="{{ URL::asset('build/libs/metismenujs/metismenujs.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/eva-icons/eva.min.js') }}"></script>

<script>
    const url = 'https://widget.bot.space/js/widget.js';
    const s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    const options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#13C656",
            "ctaText": "",
            "borderRadius": "25",
            "marginLeft": "20",
            "marginBottom": "20",
            "marginRight": "20",
            "position": "right"
        },
        "brandSetting": {
            "brandName": "{{ getSettingData()->site_name }}",
            "brandSubTitle": "Typically replies within a day",
            "brandImg": "https://i.ibb.co/QDbqQqg/Rhapsody-new-08.png",
            "welcomeText": "Hai! \nAda yang bisa kami bantu?",
            "messageText": "Halo, aku mau nanya dong tentang {{ getSettingData()->site_name }}. ",
            "backgroundColor": "#085E54",
            "ctaText": "Start Chat",
            "borderRadius": "25",
            "autoShow": false,
            "phoneNumber": "{{ getSettingData()->kontak_admin }}"
        }
    };
    s.onload = function () {
        CreateWhatsappChatWidget(options);
    };
    const x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
