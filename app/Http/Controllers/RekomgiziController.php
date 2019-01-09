<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekomgizi;
use Illuminate\Support\Facades\Session;
use Image;
use File;
class RekomgiziController extends Controller
{
    public function index()
    {
        $rekomgizi = Rekomgizi::all()->first();
        return view('backend.pages.rekomgizi.index', compact('rekomgizi'));
    }
    public function create()
    {
        $rekomgizi = Rekomgizi::all();
        return view('backend.pages.rekomgizi.create', compact('rekomgizi'));
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
               'content' => 'required',
               'feature' => 'required',
               ]);
            
            $content=$request->input('content');
            $feature=$request->input('feature');
            $data = new Rekomgizi;
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
            $data->feature=$feature;
            $data->content = $dom->saveHTML();
            $data->save();
            Session::flash('message', $data['feature'] . ' added successfully');
	        return redirect('/rekomgizi');
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
    	$data = Rekomgizi::find($id);
        return view('backend.pages.rekomgizi.edit', compact('data'));
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
        $data = Rekomgizi::find($id);
        $this->validate($request, [
            'content' => 'required',
            'feature' => 'required',
            ]);
         
         $content=$request->input('content');
         $feature=$request->input('feature');
         $data = new Rekomgizi;
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
         $data->feature=$feature;
         $data->content = $dom->saveHTML();
         $data->save();
            $data = Rekomgizi::where('id', $id);

            return redirect('/backend/pages/rekomgizi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $data = Rekomgizi::find($id);
	    $data->destroy($id);

	    Session::flash('message', $data['feature'] . ' deleted successfully');
	    return redirect('/backend/pages/rekomgizi');
    }
}
