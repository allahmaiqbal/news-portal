<?php

namespace Modules\Category\Entities;

use Exception;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Page\Entities\Page;
use Modules\Posts\Entities\Post;
use Modules\SubCategory\Entities\SubCategory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'page_id',
        'name',
        'slug',
        'description'
    ];

    /**=== Relationship start here ===*/
    public function subcategory():HasMany
    {
        return $this->hasMany(SubCategory::class);
    }

    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function page():BelongsTo
    {
       return $this->belongsTo(Page::class);
    }
    /**===Relationship end here ===*/


    protected static function newFactory()
    {
        return \Modules\Category\Database\factories\CategoryFactory::new();
    }
}
