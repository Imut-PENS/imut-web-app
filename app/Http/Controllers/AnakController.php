<?php

namespace App\Http\Controllers;

use App\Anak;
use App\User;
use App\Pertumbuhananak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use function Psy\debug;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anak = Anak::all();
        $user = User::all();
        return view('backend.pages.anak.index', compact('anak','user'));
    }
    public function tambahAnak($id){
        $user = User::find($id);
        return view('/backend/pages/anak/create', compact('user'));
    }
    public function createAnak(Request $request, $id){
        $user = User::find($id);
        $anak = Anak::where('users_id' , $user->name)->get(); 
        $request->validate([
            'nama_anak' => 'required|string',
            'usia'     => 'required|string',
            'tinggi_badan'  => 'required|integer',
            'berat_badan'  => 'required|integer',
            'lingkar_kepala' => 'required|integer'
        ]);

        $anaks = new Anak([
            'users_id'      => $id,
            'nama_anak'      => $request->nama_anak,
            'usia'     => $request->umur,
            'tinggi_badan'  => $request->tinggi_badan,
            'berat_badan'  => $request->berat_badan,
            'lingkar_kepala' => $request->lingkar_kepala,
            'foto_anak' => $request->file('foto_anak')->getClientOriginalName()

        ]);

        $foto = $request->file('foto_anak');
        $namaFoto = $foto->getClientOriginalName();
        $path = $foto->move(public_path('/img'), $namaFoto);

        $anaks->save();
        return view('/backend/pages/user/view', compact('user','anak'));
    }
    public function detailAnak($id){
        $user = User::all();
        $tumbuh = Pertumbuhananak::all();
        $anak = Anak::find($id);
        return view('/backend/pages/anak/detail_anak', compact('user','anak','tumbuh'));
    }
    // public function profile()
    // {
	//     $data = Anak::orderBy('id')->get();
    //     return view('backend.pages.anak.profile', ['anak' => $data]);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.anak.create');
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

        
              if ($request->hasFile('image')) {
                if ($request->file('image')->isValid()) {
                    $destinationPath = 'img/'; // upload path
                    $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
                    $fileName = rand(11111,99999).'.'.$extension; // renaming image
                    $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
                    Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
                          $constraint->aspectRatio();
                          $constraint->upsize();
                      })->save($destinationPath.$fileName);
                    $data['foto_anak'] = $fileName;
                    unset($data['image']);
                }
              }
        
              $data = Anak::create($data);
                $data['password'] = \Hash::make($data['password']);
	   

	    Session::flash('message', $data['name'] . ' added successfully');
	    return redirect('/backend/pages/anak');
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
    	$data = Anak::find($id);
        return view('backend/pages/anak/edit', ['anak' => $data]);
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
        $anak = $request->except('_method', '_token', 'submit');
        $anak['password'] = \Hash::make($anak['password']);
        $data = Anak::where('id', $id)->update($anak);

	    Session::flash('message', $data['name'] . ' updated successfully');
        return redirect('backend/pages/anak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $data = Anak::find($id);
	    $data->destroy($id);

	    Session::flash('message', $data['name'] . ' deleted successfully');
	    return redirect('backend/pages/anak');
    }
    
}
