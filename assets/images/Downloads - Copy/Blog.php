<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['en_title', 'ar_title', 'en_text', 'ar_text', 'image', 'banner_image', 'en_slug', 'ar_slug'];

    public function getRouteKeyName() {
        if(app()->getLocale() == 'en') {
            return 'en_slug';
        } else {
            return 'ar_slug';
        }
    }
}
