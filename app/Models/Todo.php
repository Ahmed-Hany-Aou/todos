<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Add any fields you want to be mass assignable
    protected $fillable = ['title', 'description', 'completed'];
}
