<?php

namespace App\Traits;

use App\Models\Image;

trait HasImages
{
    public function images()
    {
        return $this->hasMany(Image::class, 'imageable_id')->where('imageable_type', static::class);
    }
}
