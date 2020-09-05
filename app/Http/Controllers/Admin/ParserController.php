<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index() {
        $xml = XmlParser::load('https://news.yandex.ru/sport.rss');
        //dump($xml);
        $data = $xml->parse([
            'title' => ['uses' => 'channel.title'],
            'link' => ['uses' => 'channel.link'],
            'description' => ['uses' => 'channel.description'],
            'image' => ['uses' => 'channel.image.url'],
            'news' => ['uses' => 'channel.item[title,link,guid,description,pubDate]'],
        ]);
        $news = $data['news'];
        $data = [];
        foreach ($news as $item)
            {
                $data['title'] = $item['title'];
                $data['text'] = $item['description'];
                $data['id_category'] = 1;
                $data['isPrivate'] = 0;
                $data['image'] = null;
                $news = new News();
                $news->fill($data)->save();
            }
        //dd($data);
        return redirect()->route('admin.news')->with('success', 'Новости запарсины успешно!');
    }
}
