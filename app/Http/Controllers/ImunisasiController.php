<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imunisasi;
use App\JenisImunisasi;
use Illuminate\Support\Facades\Session;
class ImunisasiController extends Controller
{
    public function index()
    {
    
        $imunisasi = Imunisasi::all();
        return view('backend.pages.imunisasi.index', compact('imunisasi'));
    }
    public function create()
    {
        $data = Imunisasi::orderBy('id')->get();
        $imunisasi = Imunisasi::all();
        $jenis_imunisasi = JenisImunisasi::all();
        return view('backend.pages.imunisasi.create_imunisasi', compact('imunisasi','jenis_imunisasi'));
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
	    Imunisasi::create($data);
	    Session::flash('message', $data['jenis_imunisasis_id'] . ' added successfully');
	    return redirect('/backend/pages/imunisasi');
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
        $jenis_imunisasi = JenisImunisasi::all();
    	$imunisasi = Imunisasi::find($id);
        return view('backend.pages.imunisasi.edit_imunisasi',compact('jenis_imunisasi','imunisasi'));
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
        $data = Imunisasi::find($id);
        $imunisasi = $request->all();
        $data->update($imunisasi);

	    Session::flash('message', $data['jenis_imunisasi'] . ' updated successfully');
        return redirect('backend/pages/imunisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $data = Imunisasi::find($id);
	    $data->destroy($id);

	    Session::flash('message', $data['jenis_imunisasi'] . ' deleted successfully');
	    return redirect('backend/pages/imunisasi');
    }
}

