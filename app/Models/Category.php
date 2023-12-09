<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Using the HasFactory trait to enable factory support for the model
    use HasFactory;

    // Defining the table associated with the model
    protected $table = 'categories';
}
