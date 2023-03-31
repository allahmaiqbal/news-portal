<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Category\Entities\Category;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description'
    ];
    /**===Relationship start here ===*/
    public function category(): HasMany
    {
        return $this->hasMany(Category::class);
    }
    /**===Relationship end here ===*/

    protected static function newFactory()
    {
        return \Modules\Page\Database\factories\PageFactory::new();
    }
}
