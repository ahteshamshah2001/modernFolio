<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    @include('blog.layouts.partials.headerlinks')
    @include('portfolio.inc.thirdInc.google')
    <link rel="shortcut icon" href="{{ Voyager::image(setting('site.favicon')) }}">
    @include('portfolio.inc.thirdInc.microsoftClarity')
    {!! !empty(Voyager::setting('site.onesignalInc')) ? Voyager::setting('site.onesignalInc') : '' !!}
</head>

<body>
    <div id="wrapper" class="wrapper">
        <header class="header fixed-top">
            <div class="header-main navbar-expand-xl">
                <div class="container-fluid">
                    <div class="header-main">
                        <div class="site-branding">
                            <a class="dark-logo" href="{{ route('index') }}">
                                <h5>{{ !empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '' }}
                                </h5>
                            </a>
                            <a class="light-logo" href="{{ route('index') }}">
                                <h5>{{ !empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '' }}
                                </h5>
                            </a>
                        </div>
                        <div class="main-menu header-navbar">
                            <nav class="navbar">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link  dropdown-toggle" href="javascript:void(0)"
                                                id="navbarDropdown3" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"> Categories </a>
                                            <ul class="dropdown-menu ">
                                                @if (!empty($globalCategories))
                                                    @foreach ($globalCategories as $category)
                                                        <li><a class="dropdown-item "
                                                                href="{{ route('category', $category->slug ?? '') }}">{{ $category->name }}</a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link  dropdown-toggle" href="javascript:void(0)"
                                                id="navbarDropdown4" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"> Pages </a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item "
                                                    href="{{ route('page', 'about-us') }}">About Us</a>
                                                </li>
                                                <li><a class="dropdown-item "
                                                    href="{{ route('page', 'privacy-policy') }}">Privacy Policy</a>
                                                </li>
                                                <li><a class="dropdown-item "
                                                    href="{{ route('page', 'cookies') }}">Cookies</a>
                                                </li>
                                                <li><a class="dropdown-item "
                                                    href="{{ route('page', 'disclaimer') }}">Disclaimer</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="header-action-items">
                            <ul class="header-social list-inline">
                                <li><a href="{{ route('linktree') }}"><i class="fa fa-link"></i></a>
                                </li>
                            </ul>
                            <div class="search-icon"> <a href="#search"> <i class="fas fa-search"></i></a></div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="search">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 m-auto col-md-8 col-sm-11">
                                <div class="search-width  text-center">
                                    <button type="button" class="close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <form class="search-form" action="{{ route('search') }}" method="GET">
                                        <input type="search" name="query" value="{{ request('query') }}"
                                            placeholder="What are you looking for?">
                                        <button type="submit" class="search-btn">search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
    </div>
    @include('blog.layouts.partials.footerlinks')
    @yield('js')
</body>

</html>
