<?php

namespace App;
use Illuminate\Support\Facades\File;

class News
{
    private static $news = [
        1 => [
            'id' => 1,
            'cat_id' => 1,
            'isPrivate' => true,
            'title' => 'Новость 1',
            'text' => 'Хорошая новость'
        ],
        2 => [
            'id' => 2,
            'cat_id' => 2,
            'isPrivate' => true,
            'title' => 'Новость 2',
            'text' => 'А тут ещё лучше'
        ],
        3 => [
            'id' => 3,
            'cat_id' => 2,
            'isPrivate' => false,
            'title' => 'Новость 3',
            'text' => 'хамси хамса'
        ],
        4 => [
            'id' => 4,
            'cat_id' => 1,
            'isPrivate' => false,
            'title' => 'Новость 4',
            'text' => 'не рыба - не мясо'
        ],
    ];

    /*public static function getNews() {
        return static::$news;
    }

    public static function getNewsId($id) {
        //foreach (static::$news as $news) {
            //if ($news == $id) {
                return static::$news[$id];
          //  }
       // }
    }*/
    public static function getNews() {
        //File::get();
        return json_decode(File::get(storage_path() . "/news.json"), true);
    }

    public static function getNewsId($id)
    {
        return json_decode(File::get(storage_path() . "/news.json"), true)[$id];
    }

    public static function getNewsByCategoryName($name) {
        $id = NewsCategory::getCategoryIdByName($name);
        $news = [];
        foreach (static::getNews() as $item) {
            if ($item['cat_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

}
