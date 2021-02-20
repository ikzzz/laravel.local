<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = ['resource'];

    public static function rules()
    {

        return [
            'resource' => ['required', 'min:3', 'max:150'],
        ];

    }

    public static function attributesNames() {
        return [
            'resource' => 'url-адрес ресурса новостей',
        ];
    }
}
