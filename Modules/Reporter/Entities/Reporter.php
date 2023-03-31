<?php

namespace Modules\Reporter\Entities;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Reporter extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia;

    public const MEDIA_COLLECTION_AVATAR = 'reporter_media_collection_avatar';

    public const MEDIA_CONVERSION_AVATAR_THUMBNAIL = 'thumbnail';

    private const MEDIA_CONVERSION_AVATAR_WIDTH = 30;

    private const MEDIA_CONVERSION_AVATAR_HEIGHT = 30;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'address',
        // 'image'
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Posts::class);
    }

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

    protected static function newFactory()
    {
        return \Modules\Reporter\Database\factories\ReporterFactory::new();
    }



}
