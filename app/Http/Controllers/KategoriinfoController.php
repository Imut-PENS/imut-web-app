<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriInfo;
use Illuminate\Support\Facades\Session;
class KategoriinfoController extends Controller
{
    public function index()
    {
	    $data = Kategoriinfo::orderBy('id')->get();
        return view('backend.pages.info.kategori', ['kategori' => $data]);
    }
    public function create()
    {
        $data = Kategoriinfo::orderBy('id')->get();
        return view('backend.pages.info.kat_create');
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
	    Kategoriinfo::create($data);

	    Session::flash('message', $data['kat_info'] . ' added successfully');
	    return redirect('/info/kategori');
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
    	$data = Kategoriinfo::find($id);
        return view('backend.pages.info.kat_edit', ['kategori' => $data]);
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
        $data = Kategoriinfo::find($id);
        $kategori = $request->all();
        $data->update($kategori);

	    Session::flash('message', $data['kat_info'] . ' updated successfully');
        return redirect('/info/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $data = Kategoriinfo::find($id);
	    $data->destroy($id);

	    Session::flash('message', $data['kat_info'] . ' deleted successfully');
	    return redirect('/info/kategori');
    }
}
