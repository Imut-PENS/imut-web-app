<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Anak;
use App\User;
class AnakApiController extends Controller
{
    public function __construct(){
        $this->middleware('jwt.auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anaks = Anak::all();
        foreach($anaks as $anak){   
            $anak->view_anak = [
                'href' => 'api/v1/anak/' . $anak->id,
                'method' => 'GET'
            ];
        }

        $response = [
            'msg' => 'Data Anak',
            'anaks' => $anaks
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'It Works';
    }

    public function store(Request $request)
    {
        $request->validate([
            'users_id' => 'required',
            'nama_anak' => 'required',
            'umur' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'lingkar_kepala' => 'required',
            'foto_anak' => 'required'
        ]);

        $users_id = $request->input('users_id');
        $nama_anak = $request->input('nama_anak');
        $umur = $request->input('umur');
        $tinggi_badan = $request->input('tinggi_badan');
        $berat_badan = $request->input('berat_badan');
        $lingkar_kepala = $request->input('lingkar_kepala');
        $foto_anak = $request->file('foto_anak')->getClientOriginalName();

        $foto = $request->file('foto_anak');
        $namaFoto = $foto->getClientOriginalName();
        $path = $foto->move(public_path('/img'), $namaFoto);
        
        $anak = new Anak([
            'users_id' => $users_id,
            'nama_anak' => $nama_anak,
            'umur' => $umur,
            'tinggi_badan' => $tinggi_badan,
            'berat_badan' => $berat_badan,
            'lingkar_kepala' => $lingkar_kepala,
            'foto_anak' => $foto_anak, 
        ]);

        if($anak->save()){
            $anak->view_anak = [
                'href' => 'api/v1/anak/' . $anak->id,
                'method' => 'GET'
            ];
            $response = [
                'msg' => 'Data anak created',
                'data' => $anak
            ];
            return response()->json($response, 201);
        }
        $reponse = [
            'msg' => 'Error during Create'
        ];

        return response()->json($response, 404);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anak = Anak::with('users')->where('id', $id)->firstOrFail();
        $anak->view_anak = [
            'href' => 'api/v1/anak',
            'method' => 'GET'
        ];

        $response = [
            'msg' => 'Informasi Anak',
            'anak' => $anak
        ];
        return response()->json($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'It Works';
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
        $this->validate($request,[
            'users_id' => 'required',
            'nama_anak' => 'required',
            'umur' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'lingkar_kepala' => 'required',
            'foto_anak' => 'required'
        ]);

        $users_id = $request->input('users_id');
        $nama_anak = $request->input('nama_anak');
        $umur = $request->input('umur');
        $tinggi_badan = $request->input('tinggi_badan');
        $berat_badan = $request->input('berat_badan');
        $lingkar_kepala = $request->input('lingkar_kepala');
        $foto_anak = $request->file('foto_anak')->getClientOriginalName();
        
        $foto = $request->file('foto_anak');
        $namaFoto = $foto->getClientOriginalName();
        $path = $foto->move(public_path('/img'), $namaFoto);

        $anak = Anak::with('users')->findOrFail($id);

        $anak->nama_anak = $nama_anak;
        $anak->umur = $umur;
        $anak->tinggi_badan = $tinggi_badan;
        $anak->berat_badan = $berat_badan;
        $anak->lingkar_kepala = $lingkar_kepala;
        $anak->foto_anak = $foto_anak;

        if(!$anak->update()){
            return response()->json([
                'msg' => 'Error during update'
            ], 404);
        }

        $anak->view_anak = [
            'href' => 'api/v1/anak/' . $anak->id,
            'method' => 'GET'
        ];

        $response = [
            'msg' => 'Anak Updated',
            'anak' => $anak
        ];

        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anak = Anak::findOrFail($id);
        $users = $anak->users;

        if(!$anak->delete()){
            return response()->json([
                'msg' => 'Delete Failed'
            ], 404);
        }
        $response = [
            'msg' => 'Anak Deleted',
            'create'=> [
                'href' => 'api/v1/anak/',
                'method' => 'POST',
                'params' => 'nama_anak, umur, tinggi_badan, berat_badan, lingkar_kepala, foto_anak'
            ]
        ];

        return response()->json($response, 200);
    }
}
