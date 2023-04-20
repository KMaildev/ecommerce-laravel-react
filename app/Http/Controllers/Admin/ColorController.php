<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreColor;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ColorController extends Controller
{
    public function index()
    {
        $categories = Color::all();
        return view('admin.color.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.color.create');
    }

    public function store(StoreColor $request)
    {
        $category = new Color();
        $category->slug = Str::slug($request->name) . uniqid();
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function edit($id)
    {
        $category = Color::findOrFail($id);
        return view('admin.color.edit', compact('category'));
    }


    public function update(StoreColor $request, $id)
    {
        $category = Color::findOrFail($id);
        $category->slug = Str::slug($request->name) . uniqid();
        $category->name = $request->name;
        $category->update();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function destroy($id)
    {
        $permission = Color::findOrFail($id);
        $permission->delete();
        return redirect()->back()->with('success', 'Permission is successfully deleted.');
    }
}
