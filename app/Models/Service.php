<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Add other properties like the table name if necessary
    protected $table = 'services'; // Optional if table name follows conventions

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'image',
        'deskripsi',
        'icon',
        // Add other fillable attributes here
    ];
}
