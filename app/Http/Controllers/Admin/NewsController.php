<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Storage;

class NewsController extends Controller
{

    public function news()
    {
        $news = News::query()->paginate(10);

        return view('admin.news')->with('news', $news);
    }


    public function create(Request $request)
    {

        if ($request->isMethod('post')) {

            $news = new News();

            $name = null;
            if ($request->file('image')) {
                $path = \Storage::putFile('public/images', $request->file('image'));
                $image = \Storage::url($path);
            }

            $data = $request->except('_token');
            $news->fill($data)->save();


            return redirect()->route('admin.create')->with('success', 'Новость добавлена успешно!');

        }

        $news = new News();
        return view('admin.create', [
            'news' => $news,
            'categories' => Category::query()->select(['id', 'name_category'])->get()
        ]);
    }

    public function update(Request $request, News $news)
    {
        $name = null;
        if ($request->file('image')) {
            $path = \Storage::putFile('public/images', $request->file('image'));
            $name = \Storage::url($path);
        }

        $data = $request->except('_token');
        $news->fill($data)->save();
        return redirect()->route('admin.news')->with('success', 'Новость изменена успешно!');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news')->with('success', 'Новость удалена успешно!');
    }

    public function edit(News $news)
    {
        return view('admin.create', [
            'news' => $news,
            'categories' => Category::query()->select(['id', 'name_category'])->get()
        ]);
    }

    public function store(News $news)
    {

    }


}

