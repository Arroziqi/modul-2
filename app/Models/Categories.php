<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi dengan model Post
    public function posts()
    {
        return $this->hasMany(Post::class, 'id_category');
    }
}