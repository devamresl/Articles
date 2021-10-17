<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'description', 'content', 'photo', 'category_id', 'deleted_at',];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
