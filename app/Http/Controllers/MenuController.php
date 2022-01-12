<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\Category;
use Session;

class MenuController extends Controller
{

    public function index()
    {
        $category = Category::All();
        $menu = Menu::All();
        return view('panel.pages.menu.index', ['menu' => $menu, 'category' => $category]);
    }

    public function create()
    {
        $category = Category::All();
    }

    public function store(Request $request)
    {
        $category = Category::All();
 
        foreach ($category as $keyc => $valc) {
           foreach ($request->kategori as $keym => $valm) {

                if($valc->id != $valm){
                    Category::find($valc->id)->update([
                        'is_menu' => 'tidak',
                    ]);
                }
                Category::find($valm)->update([
                            'is_menu' => 'ya',
                ]);
           }
        }

        if((empty($request->nama) AND !empty($request->url)) OR (!empty($request->nama) AND empty($request->url))){
            $this->validate($request,[
           'nama' => 'required|max:15',
           'url' => 'required|url',
            ]);
        }
        if(!empty($request->nama) AND !empty($request->url))
            Menu::create([
                'nama' => $request->nama,
                'url'  => $request->url,
        ]); 
        
        Session::flash('success', 'Menu navigasi berhasil disimpan');
        return redirect('/panel/menu');
    }

    public function update(Request $request, $id)
    {
        
        $category = Category::All();


        foreach ($category as $keyc => $valc) {
           foreach ($request->kategori as $keym => $valm) {

                if($valc->id != $valm){
                    Category::find($valc->id)->update([
                        'is_menu' => 'tidak',
                    ]);
                }
                Category::find($valm)->update([
                            'is_menu' => 'ya',
                ]);
           }
        }

        

        if((empty($request->nama) AND !empty($request->url)) OR (!empty($request->nama) AND empty($request->url))){
            $this->validate($request,[
           'nama' => 'required|max:15',
           'url' => 'required|url',
            ]);
        }
        if(!empty($request->nama) AND !empty($request->url))
            Menu::find($id)->update([
                'nama' => $request->nama,
                'url'  => $request->url,
        ]); 
        
        Session::flash('success', 'Menu navigasi berhasil disimpan');
        return redirect('/panel/menu');
    }

    public function destroy(Request $request, $id)
    {

     if($request->type=='kategori'){
        Category::find($id)->update([
                    'is_menu' => 'tidak',
        ]);
     }else{
        Menu::find($id)->delete();
        
     }  
    
        Session::flash('success', 'Menu navigasi berhasil dihapus');
        return redirect('/panel/menu');
    }

}
