<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'image'];

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($category) {
            Storage::disk('public')->delete($category->image);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getUrlAttribute()
    {
        return route('categories.show', $this);
    }
}
