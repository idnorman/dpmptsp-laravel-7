<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Session;
use Hash;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::All();
        $curr_user = Auth::user();
        return view('panel.pages.user.index', ['user' => $user, 'curr_user' => $curr_user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
 
            'nama'     => 'required',
            'nip'      => 'required|min:5|max:20|unique:users',
            'username' => 'required|min:5|max:20|unique:users',
            'password' => 'required|min:5|max:20|confirmed',
            'foto'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        ]);


        $imgName = "default.png";

        if(!empty($request->foto)){
            $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('images/users'), $imgName);
        }
        

        User::create([
            'nip'  => $request->nip,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'foto' => $imgName,
            'level_user' => $request->level_user,
        ]);

        Session::flash('success', 'Pengguna berhasil ditambah');
        return redirect('panel/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        $curr_user = Auth::user();
        $publikasi_tulisan = Article::where('penulis' ,$id)->count();
        $article = Article::where('penulis', $id)->where('is_publish', 'ya')->get();
        
        if ($user == null) abort(404);
        return view('panel.pages.user.detail', ['user' => $user, 'curr_user' => $curr_user, 'publikasi_tulisan' => $publikasi_tulisan, 'article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
 
            'nama'     => 'required',
            'nip'      => 'required|min:5|max:20',
            'password' => 'required|min:5|max:20|confirmed',
 
        ]);

        
        $user = User::where('id', $id)->first();
        $user = array($user);
        
        $imgName = 'default.png';

        if(!empty($request->foto)){
            $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('images/users'), $imgName);
            if($user->foto != 'default.png'){
                $oldImgName = $user->foto;
                File::delete(public_path('images/users'.$oldImgName));
            }
            
        }else{
            $imgName = $user[0]['foto'];
        }
        
        $password = Hash::make($request->password);

        User::find($id)->update([
            'nip'  => $request->nip,
            'nama' => $request->nama,
            'username' => $user[0]['username'],
            'password' => Hash::make($request->password),
            'foto' => $imgName,
            'level_user' => $request->level_user,
        ]);

        Session::flash('success', 'Data berhasil diubah');
        return redirect('panel/user/' . $id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        
        User::find($id)->delete();

        if($user->foto != 'default.png'){
            $imgName = $user->foto;
            File::delete(public_path('images/users'.$imgName));
        }
        Session::flash('success', 'Pengguna berhasil dihapus');
        return redirect('/panel/user');
    }
}
