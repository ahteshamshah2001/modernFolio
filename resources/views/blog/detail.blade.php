@extends('blog.layouts.app')
@section('title', $detail->title ?? '')
@section('meta')
    <meta name="description" content="{{ $detail->excerpt ?? '' }}" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="{{ env('APP_URL') }}/{{ $detail->slug ?? '' }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $detail->seo_title ?? '' }}" />
    <meta property="og:description" content="{{ $detail->meta_description ?? '' }}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name"
        content="{{ !empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '' }}" />
    <meta property="article:publisher" content="{{ $detail->author->name }}" />
    <meta property="article:tag" content="{{ $detail->meta_keywords ?? '' }}" />
    <meta property="og:updated_time" content="{{ $detail->updated_at->format('F j, Y, g:i a') ?? '' }}" />
    <meta property="og:image" content="{{ Voyager::image($detail->image ?? '') }}" />
    <meta property="og:image:secure_url" content="{{ Request::url() }}" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="720" />
    <meta property="og:image:alt" content="{{ $detail->seo_title ?? '' }}" />
    <meta property="article:published_time" content="{{ $detail->created_at->format('F j, Y, g:i a') ?? '' }}" />
    <meta property="article:modified_time" content="{{ $detail->updated_at->format('F j, Y, g:i a') ?? '' }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $detail->title ?? '' }}" />
    <meta name="twitter:description" content="{{ $detail->excerpt ?? '' }}" />
    <meta name="twitter:image" content="{{ Voyager::image($detail->image ?? '') }}" />
@endsection
<link rel="stylesheet" type="text/css" href="{{ asset('blog/assets/css/custom.css') }}">
@section('content')
    <section class="mt-4 mt-md-5 mb-4 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-11 m-auto">
                    <div class="post-single">
                        <div class="post-single-image">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('category', $detail->category->slug ?? '') }}">{{ $detail->category->name ?? '' }}</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $detail->title ?? '' }}</li>
                                </ol>
                            </nav>
                            <img style="width: 100%;" src="{{ Voyager::image($detail->image ?? '') }}" class="img-fluid"
                                alt="{{ $detail->title ?? '' }} [{{ date('Y') }}]">
                        </div>
                        <div class="post-single-content">
                            <a href="{{ route('category', $detail->category->slug ?? '') }}"
                                class="categorie">{{ $detail->category->name ?? '' }}</a>
                            <h1 class="title post-title-detail">{{ $detail->title ?? '' }}
                            </h1>
                            <ul class="entry-meta list-inline">
                                <li class="post-author-img"><a href="{{ route('index') }}"> <img
                                            src="{{ Voyager::image($detail->author->avatar ?? '') }}"
                                            alt="{{ $detail->author->name ?? '' }}"></a>
                                </li>
                                <li class="post-author"><a href="{{ route('index') }}">{{ $detail->author->name }}</a>
                                </li>
                                <li class="post-date"><span class="dot"></span>Updated At:
                                    {{ $detail->updated_at->format('F j, Y, g:i a') ?? '' }}
                                </li>
                                <li class="post-timeread"><span class="dot"></span><span id="readingTime"></span> minutes
                                    read</li>
                            </ul>
                        </div>
                        <div id="main-article" class="post-single-body">
                            {!! $detail->body ?? '' !!}
                        </div>
                        <div class="social-share text-center">
                            <div class="is-divider"></div>
                            <div class="share-icons relative">
                                <a wire:ignore="" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}"
                                    onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}','facebook','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                    data-label="Facebook" aria-label="Facebook" rel="noopener noreferrer nofollow"
                                    target="_blank" class="btn btn-facebook btn-simple rounded p-2">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a wire:ignore=""
                                    href="https://twitter.com/intent/tweet?text={{ $detail->title ?? '' }}&amp;url={{ Request::url() }}&amp;counturl={{ Request::url() }}"
                                    onclick="window.open('https://twitter.com/intent/tweet?text={{ $detail->title ?? '' }}&amp;url={{ Request::url() }}&amp;counturl={{ Request::url() }}','twitter','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                    aria-label="Twitter" rel="noopener noreferrer nofollow" target="_blank"
                                    class="btn btn-twitter btn-simple rounded p-2">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a wire:ignore=""
                                    href="https://www.pinterest.com/pin-builder/?url={{ Request::url() }}&amp;media={{ Voyager::image($detail->image ?? '') }}&amp;description={{ $detail->meta_description ?? '' }}"
                                    onclick="window.open('https://www.pinterest.com/pin-builder/?url={{ Request::url() }}&amp;media={{ Voyager::image($detail->image ?? '') }}&amp;description={{ $detail->meta_description ?? '' }}','pinterest','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                    aria-label="Pinterest" rel="noopener noreferrer nofollow" target="_blank"
                                    class="btn btn-pinterest btn-simple rounded p-2">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a wire:ignore=""
                                    href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;title={{ $detail->title ?? '' }}&amp;url={{ Request::url() }}"
                                    onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;title={{ $detail->title ?? '' }}&amp;url={{ Request::url() }}','linkedin','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                    aria-label="Linkedin" rel="noopener noreferrer nofollow" target="_blank"
                                    class="btn btn-linkedin btn-simple rounded p-2">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a wire:ignore=""
                                    href="https://www.reddit.com/submit?url={{ Request::url() }}&amp;title={{ $detail->title ?? '' }}"
                                    onclick="window.open('https://www.reddit.com/submit?url={{ Request::url() }}&amp;title={{ $detail->title ?? '' }}','reddit','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                    aria-label="Reddit" rel="noopener noreferrer nofollow" target="_blank"
                                    class="btn btn-reddit btn-simple rounded p-2">
                                    <i class="fab fa-reddit"></i>
                                </a>
                                <a wire:ignore=""
                                    href="https://tumblr.com/widgets/share/tool?canonicalUrl={{ Request::url() }}"
                                    onclick="window.open('https://tumblr.com/widgets/share/tool?canonicalUrl={{ Request::url() }}','tumblr','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                    aria-label="Tumblr" target="_blank" class="btn btn-tumblr btn-simple rounded p-2"
                                    rel="noopener noreferrer nofollow">
                                    <i class="fab fa-tumblr"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-author">
                            <div class="author-img">
                                <a href="{{ route('index') }}" class="image">
                                    <img src="{{ Voyager::image($detail->author->avatar ?? '') }}" alt="">
                                </a>
                            </div>
                            <div class="author-content">
                                <h6 class="name"> Hi, I'm
                                    {{ $detail->author->name ?? '' }}
                                </h6>
                                <p class="bio">
                                    {{ $detail->author->bio ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function readingTime() {
                const text = $("#main-article").text();
                const wpm = 225;
                const words = text.trim().split(/\s+/).length;
                const time = Math.ceil(words / wpm);
                $("#readingTime").text(time);
            }
            readingTime();
        });
    </script>
@endsection
