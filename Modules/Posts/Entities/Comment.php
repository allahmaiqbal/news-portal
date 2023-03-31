<?php

namespace Modules\Posts\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [];

    /**=== Relationship start here === */
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
    /**=== Relationship start here === */

    // protected static function newFactory()
    // {
    //     return \Modules\Posts\Database\factories\CommentFactory::new();
    // }
}
