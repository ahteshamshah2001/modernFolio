<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    // Method to retrieve all testimonials that are active
    public function getAllTestimonials()
    {
        return self::where('status', 1)->get();
    }
}
