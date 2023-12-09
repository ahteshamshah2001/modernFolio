<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Package, Post, Service, Testimonial};
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    // Injecting model instances through constructor
    private Service $service;
    private Package $package;
    private Post $post;
    private Testimonial $testimonial;

    public function __construct(Service $service, Package $package, Post $post, Testimonial $testimonial)
    {
        // Assigning injected instances to class properties
        $this->service = $service;
        $this->package = $package;
        $this->post = $post;
        $this->testimonial = $testimonial;
    }

    // Method to handle the home page
    public function index(): View
    {
        // Returning the 'portfolio.index' view with data
        return view('portfolio.index', [
            'data' => [
                // Getting all services using the Service model
                'services' => $this->service->getAllServices(),
                // Getting all packages using the Package model
                'packages' => $this->package->getAllPackages(),
                // Getting featured posts using the Post model
                'posts' => $this->post->getFeaturedPosts(),
                // Getting all testimonials using the Testimonial model
                'testimonials' => $this->testimonial->getAllTestimonials()
            ]
        ]);
    }

    // Method to handle the image converter tool page
    public function image_converter(): View
    {
        // Returning the 'tools.image-converter' view
        return view('tools.image-converter');
    }

    // Method to handle the 404 (not found) page
    public function lost(): View
    {
        // Returning the '404' view
        return view('404');
    }

    // Method to handle the Linktree page
    public function linktree(): View
    {
        // Returning the 'linktree.index' view
        return view('linktree.index');
    }
}
