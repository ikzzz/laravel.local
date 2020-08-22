<?php

namespace App;
use Illuminate\Support\Facades\DB;


class NewsCategory
{
    public static function getCategories()
    {
        $categories = DB::table('categories')->get();
        return $categories;
    }

    public static function getCategoryIdByName($name) {
        $id = null;
        foreach (static::$category as $category) {
            if ($category['name'] == $name) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    public static function getCategoryById($id) {
        return static::$category[$id];
    }


}
