<?php

namespace Modules\ContactUS\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    // protected static function newFactory()
    // {
    //     return \Modules\ContactUS\Database\factories\ContactFactory::new();
    // }
}
