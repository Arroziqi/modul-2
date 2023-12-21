<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi dengan model Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}