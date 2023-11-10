<!DOCTYPE html>
<html lang="en">
  <head>
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
    {{-- navbar --}}
    @include('includes.navbar')

    <!-- Page Content -->
    @yield('content')


    {{-- footer --}}
    @include('includes.footer')

    <!-- Bootstrap core JavaScript -->
    {{-- script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

  </body>
</html>
