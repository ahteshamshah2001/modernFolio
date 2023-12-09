<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Post, Category};

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    // Method to generate the main sitemap
    public function index(): Response
    {
        // Returning the 'sitemap.sitemap' view with an XML content type header
        return response()->view('sitemap.sitemap')->header('Content-Type', 'text/xml');
    }

    // Method to generate the sitemap for posts
    public function post(): Response
    {
        // Returning the 'sitemap.post-sitemap' view with an XML content type header
        // Fetching published posts with their associated categories
        return response()->view('sitemap.post-sitemap', ['posts' => Post::with('category')->where('status', 'PUBLISHED')->get()])->header('Content-Type', 'text/xml');
    }

    // Method to generate the sitemap for categories
    public function category(): Response
    {
        // Returning the 'sitemap.category-sitemap' view with an XML content type header
        // Fetching all categories
        return response()->view('sitemap.category-sitemap', ['categories' => Category::all()])->header('Content-Type', 'text/xml');
    }
}
