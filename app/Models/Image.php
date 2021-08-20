<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getUrlAttribute(): string
    {
        return $this->attributes['url'] ? "/storage/.{$this->attributes['url']}" : '/temp/nivo/assets/img/about-2.jpg';
    }
}
