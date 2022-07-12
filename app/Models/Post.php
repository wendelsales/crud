<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Email;

class Post extends Model
{
    protected $fillable = [
        'title','content','author'
    ];
    use HasFactory;
}
