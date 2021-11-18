<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Page;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'type', 'page_slug'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function pages()
    {
        return $this->belongsTo(Page::class);
    }
}
