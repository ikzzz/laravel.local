<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use App\News;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index() {
        return view('NewsCategories')->with('categories', NewsCategory::getCategories());
    }

    public function show($name) {
        return view('NewsCategory')->with('news', News::getNewsByCategoryName($name));
    }

}
