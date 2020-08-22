<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsCategoryController extends Controller
{
    public function index() {
        //return view('NewsCategories')->with('categories', NewsCategory::getCategories());
        $categories = DB::table('categories')->get();
        return view('NewsCategories')->with('categories', $categories);
    }

    public function show($id_category) {
        $category = DB::select('SELECT * FROM news WHERE id_category = :id_category', ['id_category' => $id_category]);
        //$category = DB::table('news')->find($id_category);//что-то это незаработало
        if (!empty($category)) {
            return view('newsCategory')->with('category', $category);
        } else {
            return redirect()->route('news.category.index');
        }
    }

}
