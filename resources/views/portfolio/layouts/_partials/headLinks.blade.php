<!-- Favicon -->
<link rel="shortcut icon" href="{{ Voyager::image(setting('site.favicon')) }}">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
<!-- Plugins -->
<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
<!-- Core Style Css -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@yield('css')
