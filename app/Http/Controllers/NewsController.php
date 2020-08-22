<?php

namespace App\Http\Controllers;

use App;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get();
        return view('news')->with('news', $news);
        //return view('news')->with('news', News::getNews());
    }

    /*public function show($id)
    {
        return view('newsOne')->with('news', News::getNewsId($id));
    }
    */
    public function show($id)
    {
        ///  $news = DB::select('SELECT * FROM news WHERE id = :id', ['id' => $id]);
        $news = DB::table('news')->find($id);
        if (!empty($news)) {
            return view('newsOne')->with('news', $news);
        } else {
            return redirect()->route('news.index');
        }

    }
}
