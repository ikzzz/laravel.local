<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // protected $table = 'models';
    // protected $timestamps = false;

    protected $fillable = ['title', 'text', 'isPrivate', 'id_category', 'image'];

    public function category() {
        return $this->belongsTo(Category::class, 'id_category')->first();
    }
}
