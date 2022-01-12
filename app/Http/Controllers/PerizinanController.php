<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Perizinan;
use App\Models\About;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Article;
use App\Models\Widget;
use Session;
use Validator;



class PerizinanController extends Controller
{

    public function index()
    {
        $perizinan = Perizinan::All();
        
        return view('panel.pages.perizinan.index', compact('perizinan'));
    }

    public function indexWeb()
    {
        $perizinan = Perizinan::All();
        $about    = About::All();
        $kategori_menu = Category::All();
        $menu = Menu::All();

        $query = "artikel.kategori LIKE CONCAT('%" . '"' . "'" . ', kategori.id, ' . "'" . '"%' . "'" . ")"; 
        $pinned_artikel = Article::join('kategori', 'artikel.id', '=', 'artikel.id')
                ->where('artikel.is_pinned', 'ya')
                ->where('artikel.is_publish', 'ya')
                ->whereRaw($query)
                ->select('artikel.*','kategori.id as id_kategori','kategori.slug as slug_kategori','kategori.nama as nama_kategori')
                ->get();
        

        $pinned_artikel = $pinned_artikel->groupBy('id');
        $widget = Widget::All();


        return view('web.pages.perizinan', ['perizinan' => $perizinan, 'about' => $about, 'kategori_menu' => $kategori_menu, 'menu' => $menu, 'pinned_artikel' => $pinned_artikel, 'widget' => $widget]);
    }

    public function create()
    {
        return view('panel.pages.perizinan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|max:300'
        ]);

        $sop = null;
        $formulir = null;
        $time = date("d_m_Y_H_I_s");
        if(!empty($request->sop)) {
            $extension = $request->file('sop')->getClientOriginalExtension();
            $sop = $request->sop->getClientOriginalName().'_'.$time.'.'.$extension;
            $request->sop->move(public_path('_perizinan/sop/'), $sop);
        }

        if(!empty($request->formulir)) {
            $extension = $request->file('formulir')->getClientOriginalExtension();
            $formulir = $request->formulir->getClientOriginalName().'_'.$time.'.'.$extension;
            $request->formulir->move(public_path('_perizinan/formulir/'), $formulir);
        }


        Perizinan::create([
            'nama'  => $request->nama,
            'deskripsi' => $request->deskripsi,
            'sop' => $sop,
            'formulir' => $formulir,
        ]);
        Session::flash('success', 'Data Berhasil disimpan');
        return redirect('panel/perizinan');
    }

    public function show($id)
    {
        $perizinan_single = Perizinan::where('id',$id)->get();

        if($perizinan_single->isEmpty()){
            return abort('404');
        }
        $perizinan_all    = Perizinan::where('id','!=',$id)->get();
        $kategori_menu = Category::All();
        $menu = Menu::All();
        $about = About::All();
        $query = "artikel.kategori LIKE CONCAT('%" . '"' . "'" . ', kategori.id, ' . "'" . '"%' . "'" . ")"; 
        $pinned_artikel = Article::join('kategori', 'artikel.id', '=', 'artikel.id')
                ->where('artikel.is_pinned', 'ya')
                ->where('artikel.is_publish', 'ya')
                ->whereRaw($query)
                ->select('artikel.*','kategori.id as id_kategori','kategori.slug as slug_kategori','kategori.nama as nama_kategori')
                ->get();
        

        $pinned_artikel = $pinned_artikel->groupBy('id');
        $widget = Widget::All();

        return view('web.pages.perizinan-single', ['perizinan_single' => $perizinan_single, 'perizinan_all' => $perizinan_all, 'kategori_menu' => $kategori_menu, 'menu' => $menu, 'about' => $about, 'pinned_artikel' => $pinned_artikel, 'widget' => $widget]);
    }

    public function edit($id)
    {
        $perizinan = Perizinan::where('id', $id)->first();
        return view('panel.pages.perizinan.edit', compact('perizinan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
           'nama' => 'required|max:300'
        ]);

        $perizinan = Perizinan::where('id', $id)->first();
        $sop = $perizinan->sop;
        $formulir = $perizinan->formulir;
        $time = date("d_m_Y_H_I_s");

        $perizinan = Perizinan::where('id', $id)->first();

        if(!empty($request->sop)) {
            $extension = $request->file('sop')->getClientOriginalExtension();
            $sop = $request->sop->getClientOriginalName().'_'.$time.'.'.$extension;
            $request->sop->move(public_path('_perizinan/sop/'), $sop);

            if($perizinan->sop != null){
                $path = public_path('_perizinan/sop/');
                File::delete($path . $perizinan->sop);
            }
        }

        if(!empty($request->formulir)) {
            $extension = $request->file('formulir')->getClientOriginalExtension();
            $formulir = $request->formulir->getClientOriginalName().'_'.$time.'.'.$extension;
            $request->formulir->move(public_path('_perizinan/formulir/'), $formulir);

            if($perizinan->formulir != null){
                $path = public_path('_perizinan/formulir/');
                File::delete($path . $perizinan->formulir);
            }
        }


        Perizinan::find($id)->update([
            'nama'  => $request->nama,
            'deskripsi' => $request->deskripsi,
            'sop' => $sop,
            'formulir' => $formulir,
        ]);

        Session::flash('success', 'Data Berhasil disimpan');
        return redirect('panel/perizinan');
    }

    public function destroy($id)
    {
        $perizinan = Perizinan::where('id', $id)->first();

        Perizinan::find($id)->delete();

        if($perizinan->formulir != null){
            $path = public_path('_perizinan/formulir/');
            File::delete($path . $perizinan->formulir);
        }
        if($perizinan->sop != null){
            $path = public_path('_perizinan/sop/');
            File::delete($path . $perizinan->sop);
        }

        Session::flash('success', 'Data berhasil dihapus');
        return redirect('/panel/perizinan');
    }

    public function uploadimage(Request $request)
    {
        if($request->hasFile('upload')) {
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filenametostore = $filename.'_perizinan_image_'.time().'.'.$extension;
            

            $request->file('upload')->move(public_path('images/perizinan/'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/perizinan/'.$filenametostore);
            
            $msg = 'Gambar berhasil ditambahkan';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
