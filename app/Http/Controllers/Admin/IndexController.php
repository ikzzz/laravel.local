<?php

namespace App\Http\Controllers\Admin;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\NewsCategory;
    use App\News;
    use Illuminate\Support\Facades\File;
    use Storage;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    /*public function create() {
        return view('admin.create', [
            'categories' => NewsCategory::getCategories()
        ]);
    }
    */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = News::getNews();
            $data[] = [
                'title' => $request->title,
                'cat_id' => $request->category,
                'text' => $request->text,
                'isPrivate' => isset($request->isPrivate)
            ];
            $id = array_key_last($data);
            $data[$id]['id'] = $id;

            File::put(storage_path() . "/news.json", json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK));

            return redirect()->route('admin.create')->with('success', 'Новость создана!');
        }

        return view('admin.create', [
            'categories' => NewsCategory::getCategories()
        ]);
    }



    public function test1() {
        return view('admin.test1');
    }

    public function test2() {
        return view('admin.test2');
    }

    public function downloadImage()
    {
        return response()->download('1.jpeg');

    }

    public function json()
    {
        return response()->json(News::getNews())
            ->header('Content-Disposition', 'attachment; filename = "news_json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
