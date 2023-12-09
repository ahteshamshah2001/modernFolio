<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Using the HasFactory trait to enable factory support for the model
    use HasFactory;

    // Defining the table associated with the model
    protected $table = 'posts';

    // Method to retrieve featured posts
    public function getFeaturedPosts()
    {
        return self::with('category')->where(['status' => 'PUBLISHED', 'featured' => 1])->limit(3)->get();
    }

    // Relationship method defining a one-to-one relationship with the Category model
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    // Method to retrieve all published posts with pagination
    public function getAllPosts()
    {
        return self::with('category')->where(['status' => 'PUBLISHED'])->orderBy('created_at', 'desc')->paginate(6);
    }

    // Method to retrieve all published posts without pagination (for feed, perhaps)
    public function getAllPostsForFeed()
    {
        return self::with('category')->where(['status' => 'PUBLISHED'])->orderBy('created_at', 'desc')->get();
    }

    // Method to retrieve details of a specific blog post by its slug
    public function getBlogDetail($slug)
    {
        return self::with('category', 'author')->where(['slug' => $slug, 'status' => 'PUBLISHED'])->first();
    }

    // Relationship method defining a one-to-one relationship with the User model (author)
    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }
}
