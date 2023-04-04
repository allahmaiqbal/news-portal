<?php

namespace Modules\Posts\Entities;

use Carbon\Carbon;

use Modules\Tag\Entities\Tag;
use Modules\Users\Entities\User;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\Category;
use Modules\Reporter\Entities\Reporter;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use Modules\SubCategory\Entities\SubCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    public const MEDIA_COLLECTION_AVATAR = 'post_media_collection_avatar';

    public const MEDIA_CONVERSION_AVATAR_THUMBNAIL = 'thumbnail';

    private const MEDIA_CONVERSION_AVATAR_WIDTH = 30;

    private const MEDIA_CONVERSION_AVATAR_HEIGHT = 30;
    // protected $dates=['created_at'];
    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $fillable = [
        'title',
        'reporter_id',
        'page_id',
        'image_title',
        'user_id',
        'category_id',
        'sub_category_id',
        'slug',
        'content',
        'can_comment',
        'breaking_news',
        'published_at',
        'short_description',

    ];

    /* === Media Library Configuration Start === */
    public function registerMediaCollections(): void
    {
        // fallback avatar
        $this->addMediaCollection(self::MEDIA_COLLECTION_AVATAR)
            ->useFallbackUrl(asset('images/no-thumbnail.jpg'))
            ->singleFile();
    }

    // in your model
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion(self::MEDIA_CONVERSION_AVATAR_THUMBNAIL)
            ->width(self::MEDIA_CONVERSION_AVATAR_WIDTH)
            ->height(self::MEDIA_CONVERSION_AVATAR_HEIGHT)
            ->performOnCollections(self::MEDIA_COLLECTION_AVATAR);
    }
    /* === Media Library Configuration End === */



    /**=== Relationship start here=== */
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reporter(): BelongsTo
    {
        return $this->belongsTo(Reporter::class, 'reporter_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
    /**=== Relationship end here=== */



    /**
     * Fetch current user's posts
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfCurrentUser(Builder $query): Builder
    {
        return $query->where('user_id', auth()->id());
    }

    /* === Custom helper methods start === */

    /**
     * Check post is published or not
     *
     * @return boolean
     */
    public function isPublished(): bool
    {
        return $this->published_at != null;
    }

    /* === Custom helper methods end === */

    protected static function newFactory()
    {
        return \Modules\Posts\Database\factories\PostFactory::new();
    }
}