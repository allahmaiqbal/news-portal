<?php

namespace Modules\SubCategory\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Posts\Entities\Post;

class SubCategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
    ];
    /**===Relationship start here */

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }

    //  public function category(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class);
    // }

    /**==Relationship end here */

    protected static function newFactory()
    {
        return \Modules\SubCategory\Database\factories\SubCategoryFactory::new();
    }
}
