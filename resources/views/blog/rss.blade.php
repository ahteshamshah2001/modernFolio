<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
    <channel>
        <title>My Blog Feed</title>
        <link>{{ url('/blogs') }}</link>
        <description>The latest posts from Ahtesham</description>
        <language>en</language>
        @foreach ($posts as $post)
                <item>
                    <title>{{ $post->title }}</title>
                    <link>{{ url("/{$post->slug}") }}</link>
                    <description>{{ $post->excerpt }}</description>
                    <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
                    <category>{{ $post->category->name ?? "" }}</category>
                    <enclosure url="{{ Voyager::image($post->image ?? "") }}" alt="{{ $post->seo_title ?? "" }}"/>
                </item>
        @endforeach
    </channel>
</rss>
