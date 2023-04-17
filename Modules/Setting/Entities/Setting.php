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
    const KEY_ADVERTISE_ONE           = 'advertise_1_img';
    const KEY_ADVERTISE_TWO           = 'advertise_2_img';
    const KEY_ADVERTISE_THREE         = 'advertise_3_img';
    const KEY_ADVERTISE_FOUR          = 'advertise_4_img';
    const KEY_ADVERTISE_FIVE          = 'advertise_5_img';
    const KEY_ADVERTISE_SIX          = 'advertise_6_img';
    const KEY_ADVERTISE_SEVEN          = 'advertise_7_img';
    const KEY_ADVERTISE_EIGHT          = 'advertise_8_img';


    public function scopeKey(Builder $query, $key): Builder
    {
        return $query->where('key', $key);
    }
    protected static function newFactory()
    {
        return \Modules\Setting\Database\factories\SettingFactory::new();
    }
}