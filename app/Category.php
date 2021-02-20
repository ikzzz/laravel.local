<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name_category', 'slug_category'];

    public function news() {
        return $this->hasMany(News::class, 'id_category');
    }

    public static function rules()
    {

        return [
            'name_category' => ['required', 'min:3', 'max:20'],
            'slug_category' => ['required', 'min:3', 'max:20',],
        ];

    }

    public static function attributesNames() {
        return [
            'name_category' => 'Название категории',
            'slug_category' => 'Псевдоним категории'
        ];
    }
}
