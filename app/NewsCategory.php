<?php

namespace App;


class NewsCategory
{
    private static $category = [
        1 => [
            'id' => 1,
            'category' => 'Авто',
            'name' => 'Auto',
        ],
        2 => [
            'id' => 2,
            'category' => 'Информационные технологии',
            'name' => 'IT',
        ],
    ];

    public static function getCategories()
    {
        return static::$category;
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
