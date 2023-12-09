<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Category, Post};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use TCG\Voyager\Facades\Voyager;

class BlogController extends Controller
{
    // Property to hold an instance of the Post model
    private Post $post;

    // Constructor to inject the Post model instance
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    // Method to display the index page with all blog posts and categories
    public function index()
    {
        return view('blog.blogs', ['blogs' => $this->post->getAllPosts(), 'category' => Category::all()]);
    }

    // Method to display the detail page of a specific blog post
    public function detail($slug)
    {
        // Check if the blog detail is found, else redirect to the 404 page
        return ($detail = $this->post->getBlogDetail($slug)) ? view('blog.detail', compact('detail')) : redirect()->route('404');
    }

    // Method to display blog posts filtered by a specific category
    public function category($slug)
    {
        return view('blog.blogs', ['blogs' => Post::where('category_id', optional(Category::where('slug', $slug)->first())->id)->orderByDesc('created_at')->paginate(6)]);
    }

    // Method to display blog posts based on search query
    public function search(Request $request)
    {
        return view('blog.blogs', ['blogs' => Post::with('category')->where('title', 'LIKE', "%{$request->input('query')}%")->paginate(6)]);
    }

    // Method to display a specific page identified by slug
    public function pages($slug)
    {
        return view('blog.page', ['page' => Voyager::model('Page')->where('slug', $slug)->firstOrFail()]);
    }

    // Method to generate and return an RSS feed for all blog posts
    public function generateRssFeed()
    {
        return Response::make(view('blog.rss', ['posts' => $this->post->getAllPostsForFeed()]), '200')->header('Content-Type', 'application/rss+xml');
    }
}
