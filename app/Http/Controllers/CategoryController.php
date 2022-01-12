<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Validator;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::All();
        return view('panel.pages.category.index', compact('category'));
    }

    public function create()
    {
        return view('panel.pages.category.create');
    }

    public function store(Request $request)
    {

        request()->validate([
            'nama'     => 'required|unique:kategori',
        ]);
        

        Category::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
            'deskripsi' => $request->deskripsi,
        ]);

        Session::flash('success', 'Kategori berhasil ditambah');
        return redirect('panel/kategori');
    }

    public function show($id)
    {

        $category = Category::where('id', $id)->first();
        $category = array($category);
        return view('panel.pages.category.detail', compact('category'));
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {

        Category::find($id)->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
            'deskripsi' => $request->deskripsi,
        ]);

        Session::flash('success', 'Kategori berhasil diubah');
        return redirect('panel/kategori');

    }

    public function destroy($id)
    {

        Category::find($id)->delete();
        Session::flash('success', 'Data berhasil dihapus');
        return redirect('/panel/kategori');
    }
}
