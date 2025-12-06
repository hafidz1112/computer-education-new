<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Modul extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'youtube_link',
        'thumbnail',
        'konten',
        'author',
        'category_id',
    ];

    public function getYoutubeIdAttribute()
    {
        if (!$this->youtube_link) return null;

        // contoh: https://www.youtube.com/watch?v=abcd123
        parse_str(parse_url($this->youtube_link, PHP_URL_QUERY), $vars);

        return $vars['v'] ?? null;
    }


    // otomatis bikin slug dari title
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // relasi ke category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
