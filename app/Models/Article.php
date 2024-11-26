<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Define the many-to-many relationship with Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags', 'article_id', 'tag_id');
    }    

    // Define the one-to-many relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
