<?php

namespace App\Http\Controllers;

use App;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news')->with('news', News::getNews());
    }

    /*public function show($id)
    {
        return view('newsOne')->with('news', News::getNewsId($id));
    }
    */
    public function show($id)
    {
        if (array_key_exists($id, News::getNews())) {
            return view('newsOne')->with('news', News::getNewsId($id));
        } else {
            return redirect()->route('news.index');
        }

    }
}
