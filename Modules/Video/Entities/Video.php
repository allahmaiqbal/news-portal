<?php

namespace Modules\Video\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'link'
    ];

    protected static function newFactory()
    {
        return \Modules\Video\Database\factories\VideoFactory::new();
    }
}