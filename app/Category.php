<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name_category', 'slug_category'];

    public function news() {
        return $this->hasMany(News::class, 'id_category');
    }
}
