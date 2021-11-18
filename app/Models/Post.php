<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Media;

class Post extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = ['slug', 'title', 'content', 'type', 'user_id'];
    protected $with = ['media'];
    public $translatable = ['title', 'content'];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function media()
    {
        return $this->belongsToMany(Media::class);
    }
}
