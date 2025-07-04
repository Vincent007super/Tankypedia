<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tank extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image_url',
        'is_featured',
        'category'
    ];

    protected $casts = [
        'is_featured' => 'boolean'
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Generate a slug from the tank name
     */
    public static function generateSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::where('slug', $slug)->count();

        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }

        return $slug;
    }

    /**
     * Boot the model
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tank) {
            if (empty($tank->slug)) {
                $tank->slug = static::generateSlug($tank->name);
            }
        });
    }
}
