<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ahtesham Linktree</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ Voyager::image(setting('site.favicon')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('linkTree/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('linkTree/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('linkTree/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('linkTree/css/mobiriseicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('linkTree/css/style.css') }}">
</head>

<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg custom-nav">
        <div class="container" style="max-width: 680px">
            <button class="navbar-toggler ms-auto" type="button" data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <li class="nav-item form-check form-switch">
                    <input class="nav-link form-check-input" type="checkbox" onchange="toggle()"
                        id="flexSwitchCheckDefault">
                </li>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" id="main_nav">
                    <li class="nav-item form-check form-switch">
                        <input class="nav-link form-check-input" type="checkbox" onchange="toggle()"
                            id="flexSwitchCheckDefault">
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="max-width: 680px" id="header-section">
        <div class="col-lg-12">
            <div class="mt-0">
                <img class="rounded-circle img-fluid mx-auto d-block"
                    src="{{ Voyager::image(setting('admin.icon_image')) }}" alt="Profile Picture">
            </div>

            <div class="header-content text-center mx-auto">
                <h4 class="custom-text-color-primary header-text mb-2 mt-3">Ahtesham <i
                        class="mdi mdi-approval"></i></a></h4>
                <p class="custom-text-color-secondary subheader-text mb-2">I'm <span class="element"></span></p>
            </div>
        </div>
    </div>
    <div class="container" style="max-width: 680px" id="main-buttons">
        <div class="mt-3 pt-2">
            <a href="{{ route('portfolio') }}" style="width: 100%" class="btn btn-round btn-custom">Portfolio <i
                    class="mdi mdi-sunglasses"></i></a>
        </div>
        <div class="mt-3 pt-2">
            <a href="{{ !empty(Voyager::setting('site.linkedin')) ? Voyager::setting('site.linkedin') : '' }}"
                style="width: 100%" class="btn btn-round btn-custom">Linkedin <i class="mdi mdi-linkedin"></i></a>
        </div>
        <div class="mt-3 pt-2">
            <a href="https://github.com/ahteshamshah2001" style="width: 100%" class="btn btn-round btn-custom">Github <i
                    class="mdi mdi-github-circle"></i></a>
        </div>
        <div class="mt-3 pt-2">
            <a href="https://www.pinterest.com/ahteshamshah2001/" style="width: 100%" class="btn btn-round btn-custom">Pinterest <i
                    class="mdi mdi-pinterest"></i></a>
        </div>
        <div class="mt-3 pt-2">
            <a href="https://www.fiverr.com/ihtishamisdvlpr" style="width: 100%" class="btn btn-round btn-custom">Fiverr
                <i class="mdi mdi-approval"></i></a>
        </div>
        <div class="mt-3 pt-2">
            <a href="https://www.upwork.com/freelancers/ahteshams4" style="width: 100%"
                class="btn btn-round btn-custom">Upwork <i class="mdi mdi-approval"></i></a>
        </div>

    </div>
    <div class="container" id="footer">
        <div class="col-md-12">
            <div class="mb-4 text-center">
                <div>
                    <ul class="about-social list-inline mt-5 text-center">
                        <li class="list-inline-item"><a
                                href="{{ !empty(Voyager::setting('site.instagram')) ? Voyager::setting('site.instagram') : '' }}"
                                target="_blank"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href=https://www.youtube.com/@ahteshamshah2001"
                                target="_blank"><i class="mdi mdi-youtube-play"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/ahte2001" target="_blank"><i
                                    class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/ahteshamshah2001/"
                                target="_blank"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://t.snapchat.com/ROHfLRdS" target="_blank"><i
                                    class="mdi mdi-snapchat"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.tiktok.com/@ahtesham.me?_t=8guRbRAhKjg&_r=1" target="_blank"><i
                                    class="mdi mdi-file-video"></i></a></li>
                        <li class="list-inline-item"><a href="contact@ahtesham.me" target="_blank"><i
                                    class="mdi mdi-email"></i></a></li>
                    </ul>
                </div>
                <p class="custom-text-color-secondary footer-text mb-5 mt-3"© Copyright {{ date('Y') }} <a
                    href="{{ route('index') }}">
                    {{ !empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '' }}</a>,
                    All
                    rights reserved.</p>
            </div>
        </div>
    </div>
    <a href="#home" class="back_top"><i class="mdi mdi-chevron-up"></i></a>
    <script src="{{ asset('linkTree/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('linkTree/js/jquery.min.js') }}"></script>
    <script src="{{ asset('linkTree/js/contact.js') }}"></script>
    <script src="{{ asset('linkTree/js/typed.js') }}"></script>
    <script src="{{ asset('linkTree/js/custom.js') }}"></script>
    <script>
        var typed = new Typed('.element', {
            strings: ["A Full-Stack Developer With Expertise In Back-end Development 👨‍💻"],
            typeSpeed: 40,
            backSpeed: 40,
            backDelay: 1600,
            loop: true
        });
    </script>
    <link id="style1" rel="stylesheet" type="text/css"
        href="{{ asset('linkTree/css/colors/light-mode.css') }}" />
    <link id="style2" rel="stylesheet" type="text/css" href="{{ asset('linkTree/css/colors/dark-mode.css') }}"
        disabled="disabled" />
    <script type="text/javascript">
        function toggle() {
            var el = document.getElementById("style1");
            if (el.href.match("{{ asset('linkTree/css/colors/light-mode.css') }}")) {
                el.href = "{{ asset('') }}linkTree/css/colors/dark-mode.css";
            } else {
                el.href = "{{ asset('linkTree/css/colors/light-mode.css') }}";
            }
        }
    </script>
</body>

</html>
