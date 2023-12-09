@extends('blog.layouts.app')
@section('title', !empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '')
@section('meta')
    <link rel="canonical" href="{{ Request::url() }}" />
    @if (request()->segment(1) !== null && request()->segment(1) === 'category')
        <meta name="robots" content="noindex, nofollow" />
    @elseif(request()->has('page'))
        <meta name="robots" content="noindex, nofollow" />
    @else
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    @endif
    <meta name="description"
        content="{{ !empty(Voyager::setting('site.description')) ? Voyager::setting('site.description') : '' }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="{{ !empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '' }}" />
    <meta property="og:description"
        content="{{ !empty(Voyager::setting('site.description')) ? Voyager::setting('site.description') : '' }}" />
    <meta property="og:url" content="{{ env('APP_URL') }}/" />
    <meta property="og:site_name"
        content="{{ !empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '' }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:image" content="{{ Voyager::image(setting('site.favicon')) }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ !empty(Voyager::setting('site.title')) ? Voyager::setting('site.title') : '' }}" />
    <meta name="twitter:description" content="{{ !empty(Voyager::setting('site.description')) ? Voyager::setting('site.description') : '' }}" />
    <meta name="twitter:image" content="{{ Voyager::image(setting('site.favicon')) }}" />
@endsection
@section('content')
    @if (request()->segment(1) !== null && request()->segment(1) === 'category')
        <section class="categorie-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="categorie-title">
                            <small>
                                <a href="{{ route('index') }}">Home</a>
                                <i class="fas fa-angle-right"></i>
                                {{ request()->segment(2) && !empty(request()->segment(2)) ? request()->segment(2) : 'n/a' }}
                            </small>
                            <h3>Category : <span>
                                    {{ request()->segment(2) && !empty(request()->segment(2)) ? request()->segment(2) : 'n/a' }}</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="blog-grid mt-60" style="margin-top: 10rem;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 mt-30 side-content">
                    <div class="theiaStickySidebar">
                        <div class="row" id="post-container">
                            @if (!$blogs->isEmpty())
                                @foreach ($blogs->sortByDesc('created_at') as $blog)
                                    @include('blog.layouts.partials.post-card')
                                @endforeach
                            @endif
                            <div class="col-lg-12">
                                <div class="pagination">
                                    <ul class="list-inline">
                                        @if ($blogs->currentPage() > 1)
                                            <li><a href="{{ $blogs->previousPageUrl() }}"><i
                                                        class="fas fa-arrow-left"></i></a></li>
                                        @endif

                                        @foreach ($blogs->getUrlRange(max(1, $blogs->currentPage() - 2), min($blogs->lastPage(), $blogs->currentPage() + 2)) as $page => $url)
                                            <li class="{{ $page == $blogs->currentPage() ? 'active' : '' }}">
                                                <a href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        @if ($blogs->currentPage() < $blogs->lastPage())
                                            <li><a href="{{ $blogs->nextPageUrl() }}"><i
                                                        class="fas fa-arrow-right"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  side-sidebar">
                    <div class="theiaStickySidebar">
                        <div class="widget">
                            <div class="widget-author">
                                <div class="author-img">
                                    <a href="{{ route('index') }}" class="image">
                                        <img height="130px" width="130px"
                                            src="{{ Voyager::image(setting('admin.icon_image')) }}"
                                            alt="{{ !empty(Voyager::setting('admin.title')) ? Voyager::setting('admin.title') : '' }}">
                                    </a>
                                </div>
                                <div class="author-content">
                                    <h6 class="name">
                                        {{ !empty(Voyager::setting('admin.title')) ? Voyager::setting('admin.title') : '' }}
                                    </h6>
                                    <p class="bio">
                                        {{ !empty(Voyager::setting('admin.description')) ? Voyager::setting('admin.description') : '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="widget ">
                            <div class="section-title">
                                <h5>Latest Posts</h5>
                            </div>
                            <ul class="widget-latest-posts">
                                @if (!empty($blogs))
                                    @foreach ($blogs->sortByDesc('created_at')->take(4) as $post)
                                        <li class="post-item">
                                            <div class="image">
                                                <a href="{{ route('detail', $post->slug ?? '') }}"> <img
                                                        src="{{ Voyager::image($post->image ?? '') }}"
                                                        alt="{{ $post->title ?? '' }}"></a>
                                            </div>
                                            <div class="content">
                                                <p class="entry-title"><a
                                                        href="{{ route('detail', $post->slug ?? '') }}">{{ $post->title ?? '' }}</a>
                                                </p>
                                                <small class="post-date"><i
                                                        class="fas fa-clock"></i>{{ $post->created_at->diffForHumans() ?? '' }}
                                                </small>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="section-title">
                                <h5>Categories</h5>
                            </div>
                            <div class="widget-tags">
                                <ul class="list-inline">
                                    @if (!empty($globalCategories))
                                        @foreach ($globalCategories as $category)
                                            <li><a
                                                    href="{{ route('category', $category->slug ?? '') }}">{{ $category->name ?? '' }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
