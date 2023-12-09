<div class="col-lg-6 col-md-6">
    <div class="post-card">
        <div class="post-card-image">
            <a href="{{ route('detail', $blog->slug ?? "") }}">
                <img width="422.25px" height="237.72px" src="{{ Voyager::image($blog->image ?? "") }}" alt="{{ $blog->seo_title ?? "" }}">
            </a>
        </div>
        <div class="post-card-content">
            <div class="entry-cat">
                <a href="{{ route('category', $blog->category->slug ?? "") }}" class="categorie">{{ $blog->category->name ?? ""}}</a>
            </div>
            <h5 class="entry-title">
                <a href="{{ route('detail', $blog->slug ?? "") }}">{{ $blog->title ?? "" }}</a>
            </h5>
            <div class="post-exerpt">
                <p>{{ Str::limit($blog->excerpt ?? "", 100, $end='...') }}</p>
            </div>
            <ul class="entry-meta list-inline">
                <li class="post-author-img"><a href="{{ route('index')}}"> <img height="237.72px" width="422.25px" src="{{ Voyager::image($blog->author->avatar ?? '') }}" alt="{{ $blog->author->name ?? '' }}"></a></li>
                <li class="post-author"><a href="{{ route('index')}}">{{ $blog->author->name ?? '' }}</a></li>
                <li class="post-date"><span class="dot"></span>Published At: {{ $blog->created_at->format('F j, Y, g:i a') ?? "" }}</li>
            </ul>
        </div>
    </div>
</div>
    