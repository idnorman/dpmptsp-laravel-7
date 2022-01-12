<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Session;
use Validator;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::All();
        return view('panel.pages.about.index', compact('about'));
    }

    public function update(Request $request, $id)
    {
        About::find($id)->update([
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'facebook' => $request->facebook,
        ]);

        Session::flash('success', 'Informasi Berhasil disimpan');
        return redirect('panel/about');
    }
}
