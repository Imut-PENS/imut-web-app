<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Perkembangananak;
use Illuminate\Support\Facades\Session;
class PerkembanganAnakController extends Controller
{
    public function index()
    {
	    $data = Perkembangananak::orderBy('id')->get();
        return view('backend.pages.perkembangananak.index', ['perkembangan' => $data]);
    }
    public function create()
    {
        $data = Perkembangananak::orderBy('id')->get();
        return view('backend.pages.perkembangananak.create');
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
	    Perkembangananak::create($data);

	    Session::flash('message added successfully');
	    return redirect('/backend/pages/perkembangan');
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
    	$data = Perkembangananak::find($id);
        return view('backend.pages.perkembangananak.edit', ['perkembangan' => $data]);
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
        $data = Perkembangananak::find($id);
        $perkembangan = $request->all();
        $data->update($perkembangan);

	    Session::flash('message updated successfully');
        return redirect('backend/pages/perkembangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $data = Perkembangananak::find($id);
	    $data->destroy($id);

	    Session::flash('message deleted successfully');
	    return redirect('backend/pages/perkembangan');
    }
}
