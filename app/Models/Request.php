<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Request extends Model
{
    protected static function boot()
    {
        parent::boot();

        self::deleting(function (self $request) {

            if ($request->donations()->exists()) {

                $request->donations->each->delete();
            }
        });
    }

    use HasFactory;

    protected $table = 'requests';


    protected $guarded = ['id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->withDefault([
            'url' => ''
        ]);
    }

    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class);
    }

}
