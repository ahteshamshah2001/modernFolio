@extends('portfolio.layouts.app')
@section('title',(!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : ''))
@section('meta')
    <meta name="description"
          content="{{ (!empty(Voyager::setting('site.meta_description')) ? Voyager::setting('site.meta_description') : '') }}"/>
    <link rel="canonical" href="{{ env('APP_URL') }}">
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="portfolio"/>
    <meta property="og:title"
          content="{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}"/>
    <meta property="og:description"
          content="{{ (!empty(Voyager::setting('site.meta_description')) ? Voyager::setting('site.meta_description') : '') }}"/>
    <meta property="og:url" content="https://ahtesham.me"/>
    <meta property="og:site_name"
          content="{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}"/>
    <meta property="og:image" content="{{ Voyager::image(setting('site.favicon')) }}"/>
    <meta property="article:publisher"
          content="{{ (!empty(Voyager::setting('site.1linkinbio')) ? Voyager::setting('site.1linkinbio') : '') }}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:creator"
          content="{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}"/>
    <meta name="twitter:site"
          content="{{ (!empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '') }}"/>
    <meta name="twitter:image:src" content="{{ Voyager::image(setting('site.favicon')) }}">
@endsection
@section('content')
    @include('portfolio.inc.autoloader')
@endsection

