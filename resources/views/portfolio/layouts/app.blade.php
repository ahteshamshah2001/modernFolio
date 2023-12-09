<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('portfolio.layouts._partials.meta')
    @include('portfolio.layouts._partials.headLinks')
    @include('portfolio.inc.thirdInc.google')
    @include('portfolio.inc.thirdInc.microsoftClarity')
</head>
<body class="home-freelancer main-bg">
@include('portfolio.layouts._partials.navbar-webmob')
@include('portfolio.layouts._partials.loader-wrap')
@include('portfolio.layouts._partials.cursor')
@yield('content')
@include('portfolio.layouts._partials.footer')
{{--@include('portfolio.layouts._partials.navbar')--}}
</body>
</html>
