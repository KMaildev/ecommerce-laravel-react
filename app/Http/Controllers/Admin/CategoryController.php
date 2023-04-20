<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreCategory $request)
    {
        $category = new Category();
        $category->slug = Str::slug($request->name) . uniqid();
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }


    public function update(StoreCategory $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->slug = Str::slug($request->name) . uniqid();
        $category->name = $request->name;
        $category->update();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function destroy($id)
    {
        $permission = Category::findOrFail($id);
        $permission->delete();
        return redirect()->back()->with('success', 'Permission is successfully deleted.');
    }
}
