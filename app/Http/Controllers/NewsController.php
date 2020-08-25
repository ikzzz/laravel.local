<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::query()->paginate(5);

        return view('news.index')->with('news', $news);
    }

    public function show(News $news)
    {
        return view('news.One')->with('news', $news);
    }

}
