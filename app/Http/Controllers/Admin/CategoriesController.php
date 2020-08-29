<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function categories()
    {
        $categories = category::query()->paginate(5);
        //$categories = DB::table('categories')->get();

        return view('admin.categories')->with('categories', $categories);
    }


    public function create(Request $request)
    {

        if ($request->isMethod('post')) {

            $category = new Category;

            //$category = null;

            $data = $request->except('_token');
            $this->validate($request, Category::rules(),[],Category::attributesNames());
            $category->fill($data)->save();
            return redirect()->route('admin.categories')->with('success', 'Категория добавлена успешно!');

            //return redirect()->route('admin.catCreate')->with('success', 'Категория добавлена успешно!');

        }

        $category = new Category;
        return view('admin.catCreate', [
            'category' => $category,
            'categories' => Category::query()->select(['id', 'name_category', 'slug_category'])->get()
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->except('_token');
        $this->validate($request, Category::rules(),[],Category::attributesNames());
        $category->fill($data)->save();
        return redirect()->route('admin.categories')->with('success', 'Категория изменена успешно!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Категория удалена успешно!');
    }

    public function edit(Category $category)
    {
        return view('admin.catCreate', [
            'category' => $category,
            'categories' => Category::query()->select(['id', 'name_category','slug_category'])->get()
        ]);
    }

    public function store(Category $category)
    {

    }
}

