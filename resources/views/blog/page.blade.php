@extends('blog.layouts.app')
@section('title', $page->title)
@section('content')
    <section class="mt-4 mt-md-5 mb-4 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-11 m-auto">
                    <div class="post-single">
                        <div class="post-single-content">
                            <h1 class="title post-title-detail">{{ $page->title ?? '' }}
                            </h1>
                        </div>
                        <div id="main-article" class="post-single-body">
                            {!! $page->body ?? '' !!}
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-author">
                            <div class="author-img">
                                <a href="#" class="image">
                                    <img src="{{ Voyager::image(setting('admin.icon_image')) }}" alt="{{ !empty(Voyager::setting('admin.title')) ? Voyager::setting('admin.title') : '' }}">
                                </a>
                            </div>
                            <div class="author-content">
                                <h6 class="name">{{ !empty(Voyager::setting('admin.title')) ? Voyager::setting('admin.title') : '' }}
                                </h6>
                                <p class="bio">{{ !empty(Voyager::setting('admin.description')) ? Voyager::setting('admin.description') : '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
