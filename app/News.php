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

    public static function rules()
    {
        $tableNameCategory = (new Category())->getTable();
        return [
            'title' => ['required', 'min:3', 'max:20'],//, new Ember()],
            'text' => 'required|min:3',
            'image' => 'mimes:jpeg,bmp,png|max:1024',
            'isPrivate' => 'sometimes|in:on',
            'id_category' => "required|exists:{$tableNameCategory},id"
        ];

    }

    public static function attrNames() {
        return [
            'title' => 'Заголовок новости',
            'text' => 'Текст новости',
            'id_category' => "Категория новости",
            'image' => "Изображение"
        ];
    }


}
