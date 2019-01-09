<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anak;
use App\Pertumbuhananak;
use Illuminate\Support\Facades\Session;
class PertumbuhanAnakController extends Controller
{
    public function index($id)
    {
       
    }
    public function grafik($id)
    {
        return view('backend/pages/anak/grafik');
    }
    public function viewgrafik($id)
    {
        $result = Pertumbuhananak::find($id);
      $result = \DB::table('pertumbuhananaks')
                  ->where('tinggi_badan','=','Tinggi')
                  ->get();
        $result = \DB::table('anaks')
                  ->orderBy('usia', 'ASC')
                  ->get();
      return response()->json($result);
    }
    public function addpertumbuhan($id)
    {
        return view('backend/pages/anak/addpertumbuhan');
    }
    public function create()
    {
        $data = Pertumbuhananak::orderBy('id')->get();
        return view('backend.pages.pertumbuhananak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tumbuh = new Pertumbuhananak;
        $tumbuh->tanggal = $request->tanggal;
        $tumbuh->tinggi_badan = $request->tinggi_badan;
        $tumbuh->berat_badan = $request->berat_badan;
        $tumbuh->lingkar_kepala = $request->lingkar_kepala;

        $tumbuh->save();

        return response()->json(['success' => 'Growth has been successfully added'], 200);
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
    	$data = Pertumbuhananak::find($id);
        return view('backend.pages.anak.editpertumbuhan', ['tumbuh' => $data]);
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
        $data = Pertumbuhananak::find($id);
        $tumbuh_anak = $request->all();
        $data->update($tumbuh_anak);
        return redirect('backend/pages/anak/{id}/detail_anak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
	    $data = Pertumbuhananak::find($id);
	    $data->destroy($id);
	    return redirect('backend/pages/anak/{id}/detail_anak');
    }
    
}
