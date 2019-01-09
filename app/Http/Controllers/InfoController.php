<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriInfo;
use App\Info;
use Illuminate\Support\Facades\Session;
use Image;
use File;
class InfoController extends Controller
{
    public function index()
    {
        $info = Info::all();
        $kategori = Kategoriinfo::all();
        return view('backend.pages.info.index', compact('info','kategori'));
    }
    public function create()
    {
        $data = Info::orderBy('id')->get();
        $info = Info::all();
        $kategori = Kategoriinfo::all();
        return view('backend.pages.info.create', compact('info','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $data = $request->all();
        $this->validate($request, [
                'katinfo_id' => 'required',
                'judul' => 'required',
               'content' => 'required',
           ]);
            $katinfo_id=$request->input('katinfo_id');
            $judul=$request->input('judul');
            $content=$request->input('content');

            $data = new Info;
            $dom = new \DomDocument();
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');
           // foreach <img> in the submited content
            foreach($images as $img){
                $src = $img->getAttribute('src');
                
                // if the img source is 'data-url'
                if(preg_match('/data:image/', $src)){                
                    // get the mimetype
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];                
                    // Generating a random filename
                    $filename = uniqid();
                    $filepath = "/img/$filename.$mimetype";    
                    // @see http://image.intervention.io/api/
                    $image = Image::make($src)
                      // resize if required
                      ->resize(200, 100)
                      /* ->resize(300, 200) */
                      ->encode($mimetype, 100)  // encode file to the specified mimetype
                      ->save(public_path($filepath));                
                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                } // <!--endif
            } // <!-
            $data->katinfo_id=$katinfo_id;
            $data->judul=$judul;
            $data->content = $dom->saveHTML();
            $data->save();
            Session::flash('message', $data['judul'] . ' added successfully');
	        return redirect('/backend/pages/info');
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
        $kategori = Kategoriinfo::all();
    	$info = Info::find($id);
        return view('backend.pages.info.edit', compact('info','kategori'));
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
        $data = Info::find($id);
        $this->validate($request, [
                'katinfo_id' => 'required',
                'judul' => 'required',
               'content' => 'required',
           ]);
            $katinfo_id=$request->input('katinfo_id');
            $judul=$request->input('judul');
            $content=$request->input('content');

            $dom = new \DomDocument();
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');
           // foreach <img> in the submited content
            foreach($images as $img){
                $src = $img->getAttribute('src');
                
                // if the img source is 'data-url'
                if(preg_match('/data:image/', $src)){                
                    // get the mimetype
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];                
                    // Generating a random filename
                    $filename = uniqid();
                    $filepath = "/img/$filename.$mimetype";    
                    // @see http://image.intervention.io/api/
                    $image = Image::make($src)
                      // resize if required
                      ->resize(200, 100)
                      /* ->resize(300, 200) */
                      ->encode($mimetype, 100)  // encode file to the specified mimetype
                      ->save(public_path($filepath));                
                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                } // <!--endif
            } // <!-
            $data->katinfo_id=$katinfo_id;
            $data->judul=$judul;
            $data->content = $dom->saveHTML();
            $data->save();
            $data = Info::where('id', $id);

            return redirect('backend/pages/info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $data = Info::find($id);
	    $data->destroy($id);

	    Session::flash('message', $data['judul'] . ' deleted successfully');
	    return redirect('backend/pages/info');
    }
}
