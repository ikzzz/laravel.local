<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::query();
        if(!Auth::id()) {
            $news->where('isPrivate', 0);
        }
        return view('news.index',['news'=>$news->paginate(10)]);
       // return view('news.index')->with('news', $news);
    }

    public function show(News $news)
    {
        return view('news.One')->with('news', $news);
    }

}
