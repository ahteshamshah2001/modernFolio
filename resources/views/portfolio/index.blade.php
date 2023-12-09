@extends('portfolio.layouts.app')
@section('title',(!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : ''))
@section('meta')
    <meta name="description"
          content="Hi, I'm {{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}, a Full-Stack Developer. Expert in app/web development, React Native, WordPress, eCommerce, branding,  logo design, SEO, digital marketing, content writing."/>
    <link rel="canonical" href="https://ahtesham.me">
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="portfolio"/>
    <meta property="og:title"
          content="{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}"/>
    <meta property="og:description"
          content="Hi, I'm {{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}, a Full-Stack Developer. Expert in app/web development, React Native, WordPress, eCommerce, branding, logo design, SEO, digital marketing, content writing."/>
    <meta property="og:url" content="https://ahtesham.me"/>
    <meta property="og:site_name"
          content="{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}"/>
    <meta property="og:image" content="{{ asset('assets/imgs/freelancer/ooo.webp') }}"/>
    <meta property="article:publisher"
          content="{{ (!empty(Voyager::setting('site.linkedin')) ? Voyager::setting('site.linkedin') : '') }}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:creator"
          content="{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}"/>
    <meta name="twitter:site"
          content="{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}"/>
    <meta name="twitter:image:src" content="{{ asset('assets/imgs/freelancer/ooo.webp') }}">
@endsection
@section('content')
    @include('portfolio.inc.autoloader')
@endsection

