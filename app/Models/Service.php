<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Using the HasFactory trait to enable factory support for the model
    use HasFactory;

    // Defining the table associated with the model
    protected $table = 'services';

    // Allowing mass assignment for all attributes
    protected $guarded;

    // Method to retrieve all services that are active
    public function getAllServices()
    {
        return self::where([
            'status' => 1,
            'deleted_at' => null
        ])->get();
    }
}
