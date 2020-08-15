<?php

namespace App\Http\Controllers\Admin;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\NewsCategory;
    use App\News;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function addNews() {
        return view('admin.addNews', [
            'categories' => NewsCategory::getCategories()
        ]);
    }

    public function test2() {
        return view('admin.test2');
    }
}
