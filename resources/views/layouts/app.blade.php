<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BY7W5XMD2J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BY7W5XMD2J');
    </script>

    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="Rhapsody" />
    <meta
        name="keywords"
        content="lpk rhapsody, rhapsody, lpk bali, sekolah, sekolah pariwisata, sekolah kapal, sekolah kapal pesiar, lembaga pelatihan kerja, lembaga pelatihan kerja bali, lpk rhapsody hospitality development center"
    />
    <meta name="robots" content="INDEX,FOLLOW" />

    <title>@yield('title')</title>

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>
@include('includes.navbar')

<!-- Page Content -->
@yield('content')

{{-- footer --}}
@include('includes.footer')

<!-- Bootstrap core JavaScript -->
{{-- script --}}
@include('sweetalert::alert')
@stack('prepend-script')
@include('includes.script')
@stack('addon-script')

</body>
</html>
