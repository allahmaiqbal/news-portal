<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'value',
    ];
    //for advertise setting
    const KEY_ADVERTISE_ONE             = 'advertise_1_img';
    const KEY_ADVERTISE_lINK_ONE        = 'advertise_link1';
    const KEY_ADVERTISE_TWO             = 'advertise_2_img';
    const KEY_ADVERTISE_LINK_TWO        = 'advertise_link2';
    const KEY_ADVERTISE_THREE           = 'advertise_3_img';
    const KEY_ADVERTISE_LINK_THREE      = 'advertise_link3';
    const KEY_ADVERTISE_FOUR           = 'advertise_4_img';
    const KEY_ADVERTISE_LINK_FOUR      = 'advertise_link4';
    const KEY_ADVERTISE_FIVE           = 'advertise_5_img';
    const KEY_ADVERTISE_LINK_FIVE      = 'advertise_link5';



    public function scopeKey(Builder $query, $key): Builder
    {
        return $query->where('key', $key);
    }
    protected static function newFactory()
    {
        return \Modules\Setting\Database\factories\SettingFactory::new();
    }
}
