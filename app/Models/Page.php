<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Media;

class Page extends Model
{
    use HasFactory;

    protected $primaryKey = 'slug';
    protected $keyType = 'string';
    protected $fillable = ['slug', 'title', 'content', 'isHomepage'];

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
