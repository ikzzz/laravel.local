<?php

namespace App;
use Illuminate\Support\Facades\File;

class News
{

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
