<?php


namespace App\Services;

use App\Category;
use App\News;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Support\Str;

class XMLParserService
{
    public function saveNews($link) {
        $xml = XmlParser::load($link);
        $data = $xml->parse([
            'title' => ['uses' => 'channel.title'],
            'link' => ['uses' => 'channel.link'],
            'description' => ['uses' => 'channel.description'],
            'image' => ['uses' => 'channel.image.url'],
            'news' => ['uses' => 'channel.item[guid,title,link,description,category,pubDate,enclosure::url,category]']
        ]);

        foreach ($data['news'] as $news) {
            if ($news['category']) {
                $category = Category::query()->firstOrCreate([
                    'name_category' => $news['category'],
                    'slug_category' => Str::slug($news['category'])
                ]);

                News::query()->firstOrCreate([
                    'title' => $news['title'],
                    'text' => $news['description'],
                    'isPrivate' => false,
                    'image' => $news['enclosure::url'],
                    'id_category' => $category->id,
                ]);
            }
        }



    }
}
