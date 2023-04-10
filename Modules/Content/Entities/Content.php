<?php

namespace Modules\Content\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];

    const KEY_TERMS_CONDITIONS = 'terms_conditions';
    // basic insformation
    const KEY_SITE_NAME_PRIMARY = 'site_name_primary';
    const KEY_EMAIL_ADDRESS_PRIMARY = 'email_address_primary';
    const KEY_PHONE_NUMBER_PRIMARY = 'phone_number_primary';
    const KEY_ADDRESS ='address_primary';
    const KEY_LOGO = 'logo';


    public function scopeKey(Builder $query, $key): Builder
    {
        return $query->where('key', $key);
    }

    protected static function newFactory()
    {
        return \Modules\Content\Database\factories\ContentFactory::new();
    }
}
