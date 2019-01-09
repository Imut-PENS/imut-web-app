<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imunisasi;
use App\JenisImunisasi;
use Illuminate\Support\Facades\Session;
class JenisImunisasiController extends Controller
{
    public function index()
    {
	    $data = JenisImunisasi::orderBy('id')->get();
        return view('backend.pages.jenis_imunisasi.index', ['jenis_imunisasi' => $data]);
    }
    public function create()
    {
        $data = JenisImunisasi::orderBy('id')->get();
        return view('backend.pages.jenis_imunisasi.create_jenis');
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
	    JenisImunisasi::create($data);

	    Session::flash('message', $data['jenis_imunisasi'] . ' added successfully');
	    return redirect('/backend/pages/jenis_imunisasi');
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
    	$data = JenisImunisasi::find($id);
        return view('backend.pages.jenis_imunisasi.edit_jenis', ['jenis_imunisasi' => $data]);
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
        $data = JenisImunisasi::find($id);
        $jenis_imunisasi = $request->all();
        $data->update($jenis_imunisasi);

	    Session::flash('message', $data['jenis_imunisasi'] . ' updated successfully');
        return redirect('backend/pages/jenis_imunisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $data = JenisImunisasi::find($id);
	    $data->destroy($id);

	    Session::flash('message', $data['jenis_imunisasi'] . ' deleted successfully');
	    return redirect('backend/pages/jenis_imunisasi');
    }
}
