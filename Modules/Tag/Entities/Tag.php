<?php

namespace Modules\Tag\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\Posts\Entities\Post;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];
    // public function tags()
    // {
    //     return $this->morphToMany(Tag::class, 'taggables');
    // }
    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    // protected static function newFactory()
    // {
    //     return \Modules\Tag\Database\factories\TagFactory::new();
    // }
}
