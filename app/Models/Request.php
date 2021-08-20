<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function catagory()
    {
        return $this->belongsToMany(RequestCategory::class , 'request_categories');
    }

    public function image()
    {
        return $this->morphOne(Image::class , 'imageable')->withDefault([
            'url' => ''
        ]);
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

}
