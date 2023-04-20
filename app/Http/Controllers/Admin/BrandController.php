<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrand;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        $categories = Brand::all();
        return view('admin.brand.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(StoreBrand $request)
    {
        $category = new Brand();
        $category->slug = Str::slug($request->name) . uniqid();
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function edit($id)
    {
        $category = Brand::findOrFail($id);
        return view('admin.brand.edit', compact('category'));
    }


    public function update(StoreBrand $request, $id)
    {
        $category = Brand::findOrFail($id);
        $category->slug = Str::slug($request->name) . uniqid();
        $category->name = $request->name;
        $category->update();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function destroy($id)
    {
        $permission = Brand::findOrFail($id);
        $permission->delete();
        return redirect()->back()->with('success', 'Permission is successfully deleted.');
    }
}
