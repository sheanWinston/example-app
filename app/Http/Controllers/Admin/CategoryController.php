<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function addCategory() {

        return view('admin.add_category');
    }


    function store(Request $request) {

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return back();
    }

}
