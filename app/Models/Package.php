<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    // Using the HasFactory trait to enable factory support for the model
    use HasFactory;

    // Defining the table associated with the model
    protected $table = 'packages';

    // Allowing mass assignment for all attributes
    protected $guarded;

    // Method to retrieve all packages that are featured and active
    public function getAllPackages()
    {
        return self::where([
            'status' => 1,
            'deleted_at' => null,
            'featured' => 1
        ])->limit(3)->get();
    }
}
