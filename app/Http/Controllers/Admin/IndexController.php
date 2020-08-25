<?php

namespace App\Http\Controllers\Admin;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\NewsCategory;
    use App\News;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\DB;
    use Storage;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }

  /*  public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = null;
            if ($request->file('image')) {
                $path = \Storage::putFile('public/images', $request->file('image'));
                $name = \Storage::url($path);
            }

            $data[] = [
                "title" => $request->title,
                "id_category" => $request->category,
                "text" => $request->text,
                "isPrivate" => isset($request->isPrivate),
                "image" => $name
            ];

            DB::table('news')->insert($data);

            return redirect()->route('admin.create')->with('success', 'Новость добавлена успешно!');
        }

        return view('admin.create', [
            'categories' => NewsCategory::getCategories()
        ]);
    }
*/


    public function test1() {
        return view('admin.test1');
    }

    public function test2() {
        return view('admin.test2');
    }
    /*
    public function downloadImage()
    {
        return response()->download('1.jpeg');

    }

    public function json()
    {
        return response()->json(News::getNews())
            ->header('Content-Disposition', 'attachment; filename = "news_json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }*/
}
