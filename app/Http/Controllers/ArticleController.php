<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Session;
use Validator;
use ImageResize;

class ArticleController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $category = Category::All();

        if($user->level_user == 'admin'){
            $article = Article::join('users', 'users.id', '=', 'artikel.penulis')
                ->select('artikel.*','users.nama')
                ->get();
        }else{
            $article = Article::join('users', 'users.id', '=', 'artikel.penulis')
                ->select('artikel.*','users.nama')->where('artikel.penulis',$user->id)
                ->get();
        }

        return view('panel.pages.article.index', ['article' => $article, 'category' => $category]);
    }

    public function create()
    {
        $category = Category::All();
        return view('panel.pages.article.create', compact('category'));
    }

    public function store(Request $request)
    {
        
        $this->validate($request,[
           'judul' => 'required|max:300',
           'kategori' => 'required',
           'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imgName = "";
        $user_id = Auth::user()->id;
        
        if(!empty($request->thumbnail)){

            $imgName     = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();

            $image       =       $request->file('thumbnail');

            $path        =       public_path('images/'.$user_id.'/article-images/thumbnail/');

            $img270x205         =       ImageResize::make($image->path());
            $img584x444         =       ImageResize::make($image->path());
            $img125x151         =       ImageResize::make($image->path());
            $img371x221         =       ImageResize::make($image->path());
            $img124x94          =       ImageResize::make($image->path());
            $img730x400         =       ImageResize::make($image->path());
            $img319x279         =       ImageResize::make($image->path());

            File::exists($path) or File::makeDirectory($path, 0777, true, true);


            // --------- [ Resize Image ] ---------------

            $img270x205->resize(540, 230, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(270,205)->save($path.'/'.'270'.$imgName);

            $img584x444->resize(900, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(584,444)->save($path.'/'.'584'.$imgName);

            $img125x151->resize(300, 175, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(125,151)->save($path.'/'.'125'.$imgName);

            $img371x221->resize(600, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(371,221)->save($path.'/'.'371'.$imgName);

            $img124x94->resize(270, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(124,94)->save($path.'/'.'124'.$imgName);

            $img730x400->resize(1280, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(730,400)->save($path.'/'.'730'.$imgName);

            $img319x279->resize(700, 279, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(319,279)->save($path.'/'.'319'.$imgName);

        }

        Article::create([
            'judul'  => $request->judul,
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->judul, '-'),
            'subjek' => $request->subjek,
            'thumbnail' => $imgName,
            'kategori' => $request->kategori,
            'penulis' => $user_id,
            'is_publish' => $request->is_publish,
            'is_featured' => $request->is_featured,
            'is_pinned' => $request->is_pinned,
        ]);

        Session::flash('success', 'Artikel Berhasil disimpan');
        return redirect('panel/artikel');
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        $user = array($user);

        if ($user == null) abort(404);
        return view('panel.pages.user.detail', compact('user'));
    }

    public function edit($id)
    {
        $article = Article::where('id', $id)->first();
        $data_kategori = array();

        foreach (json_decode($article['kategori']) as $key => $id) {
            $category = Category::where('id', $id)->first();
            $data_kategori[$key]['id_kategori'] = $id;
            $data_kategori[$key]['nama_kategori'] = $category['nama'];
        }

        $nama_penulis = User::where('id', $article['penulis'])->first();;
        $article['nama_penulis'] = $nama_penulis['nama'];
        $article['data_kategori']= $data_kategori;
        $category = Category::All();
        return view('panel.pages.article.edit', ['article' => $article, 'category' => $category]);

    }

    public function update(Request $request, $id)
    {

        $this->validate($request,[
           'judul' => 'required|max:300',
           'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imgName = "";
        
        $article = Article::where('id', $id)->first();
        $user_id = $article->penulis;
        $oldImgName = $article->thumbnail;
            if(!empty($request->thumbnail)){

            $imgName     = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();

            $image       =       $request->file('thumbnail');

            $path        =       public_path('images/'.$user_id.'/article-images/thumbnail/');

            $img270x205         =       ImageResize::make($image->path());
            $img584x444         =       ImageResize::make($image->path());
            $img125x151         =       ImageResize::make($image->path());
            $img371x221         =       ImageResize::make($image->path());
            $img124x94          =       ImageResize::make($image->path());
            $img730x400         =       ImageResize::make($image->path());
            $img319x279         =       ImageResize::make($image->path());

            File::exists($path) or File::makeDirectory($path, 0777, true, true);


            // --------- [ Resize Image ] ---------------

            $img270x205->resize(540, 230, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(270,205)->save($path.'/'.'270'.$imgName);

            $img584x444->resize(900, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(584,444)->save($path.'/'.'584'.$imgName);

            $img125x151->resize(300, 175, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(125,151)->save($path.'/'.'125'.$imgName);

            $img371x221->resize(600, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(371,221)->save($path.'/'.'371'.$imgName);

            $img124x94->resize(270, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(124,94)->save($path.'/'.'124'.$imgName);

            $img730x400->resize(1280, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(730,400)->save($path.'/'.'730'.$imgName);

            $img319x279->resize(700, 279, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(319,279)->save($path.'/'.'319'.$imgName);

            //Delete After New Thumbnail Uploaded
            File::delete($path.'/'.'270'.$oldImgName);
            File::delete($path.'/'.'584'.$oldImgName);
            File::delete($path.'/'.'125'.$oldImgName);
            File::delete($path.'/'.'371'.$oldImgName);
            File::delete($path.'/'.'124'.$oldImgName);
            File::delete($path.'/'.'730'.$oldImgName);
            File::delete($path.'/'.'319'.$oldImgName);

        }else{
            $imgName = $article->thumbnail;
        }

        Article::find($id)->update([
            'judul'  => $request->judul,
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->judul, '-'),
            'subjek' => $request->subjek,
            'thumbnail' => $imgName,
            'kategori' => $request->kategori,
            'is_publish' => $request->is_publish,
            'is_featured' => $request->is_featured,
            'is_pinned' => $request->is_pinned,
        ]);

        
        Session::flash('success', 'Artikel Berhasil disimpan');
        return redirect('panel/artikel/'.$id.'/edit');


    }

    public function destroy($id)
    {
        $article = Article::where('id', $id)->first();
        $user_id = $article->penulis;
        $imgName = $article->thumbnail;
        $path    = public_path('images/'.$user_id.'/article-images/thumbnail/');

        File::delete($path.'/'.'270'.$imgName);
        File::delete($path.'/'.'584'.$imgName);
        File::delete($path.'/'.'125'.$imgName);
        File::delete($path.'/'.'371'.$imgName);
        File::delete($path.'/'.'124'.$imgName);
        File::delete($path.'/'.'730'.$imgName);
        File::delete($path.'/'.'319'.$imgName);

        Article::find($id)->delete();

        Session::flash('success', 'Artikel berhasil dihapus');
        return redirect('/panel/artikel');
    }

    public function uploadimage(Request $request)
    {
        if($request->hasFile('upload')) {
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filenametostore = $filename.'_article_image_'.time().'.'.$extension;
            
            $user_id = Auth::user()->id;

            $request->file('upload')->move(public_path('images/'.$user_id.'/article-images/'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$user_id.'/article-images/'.$filenametostore);
            
            $msg = 'Gambar berhasil diunggah';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }


}
