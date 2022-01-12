<?php


namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Widget;

use Session;
use Validator;
use ImageResize;

class WidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $widget = Widget::All();
        return view('panel.pages.widget.index', compact('widget'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        if($request->jenis == 'widget'){
            Widget::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
            ]);
            Session::flash('success', 'Widget berhasil disimpan');
        }else{

            
            $image = ImageResize::make($request->file('gambar_banner')->path());
            $time = date("d_m_Y_H_I_s");

            $banner = $request->gambar_banner->getClientOriginalName().'_'.$time.'.'.$request->gambar_banner->extension();
            $path = '_widget/banner/';
            File::exists($path) or File::makeDirectory($path, 0777, true, true);

            $image->resize(370, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path.$banner);


            Widget::create([
            'nama' => $request->nama,
            'jenis' => 'banner',
            'gambar' => $banner,
            ]);
            Session::flash('success', 'Banner berhasil disimpan');
        }
        
        return redirect('panel/widget');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if($request->jenis == 'widget'){

            $this->validate($request,[
           'nama' => 'required|max:15',
           'kode' => 'required|',
            ]);

            $widget = Widget::where('id', $id)->first();
            
            Widget::find($id)->update([
            'nama' => $request->nama,
            'jenis' => 'widget',
            'kode' => $request->kode,
            'gambar' => null
            ]);

            if($widget->gambar != null){
                $pathfile = "_widget/banner/" . $widget->gambar;
                File::delete($pathfile);
            }
            Session::flash('success', 'Widget berhasil disimpan');
        }else{
            $this->validate($request,[
           'nama' => 'required|max:15',
           'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            
            $widget = Widget::where('id', $id)->first();
            $banner = $widget->gambar;
            if(!empty($request->gambar_banner)){

                $image = ImageResize::make($request->file('gambar_banner')->path());
                $time = date("d_m_Y_H_I_s");

                $banner = $request->gambar_banner->getClientOriginalName().'_'.$time.'.'.$request->gambar_banner->extension();
                $path = '_widget/banner/';
                File::exists($path) or File::makeDirectory($path, 0777, true, true);
                if($id==1 || $id==2){
                    $image->save($path.$banner);
                }else{
                    $image->resize(370, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    })->save($path.$banner);
                }
            }
            


            $result = Widget::find($id)->update([
            'nama' => $request->nama,
            'jenis' => 'banner',
            'gambar' => $banner,
            'kode' => null
            ]);
            if($widget->gambar != null){
                $pathfile = "_widget/banner/" . $widget->gambar;
                File::delete($pathfile);
            }
            Session::flash('success', 'Banner berhasil disimpan');
        }
        
        return redirect('panel/widget');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if($id == 1 OR $id==2){
            Widget::find($id)->update([
                'gambar' => null,
                'kode' => null
            ]);
            $widget = Widget::where('id', $id)->first();
            if($widget->gambar != null){
                $pathfile = "_widget/banner/" . $widget->gambar;
                File::delete($pathfile);
            }
            Session::flash('success', 'Banner berhasil direset');
        }else{
            $widget = Widget::where('id', $id)->first();
            
            Widget::destroy($id);

            if($widget->gambar != null){
                $pathfile = "_widget/banner/" . $widget->gambar;
                File::delete($pathfile);
            }
            Session::flash('success', 'Widget/banner berhasil dihapus');
        }

        return redirect('panel/widget');
    }
}
