<?php

namespace App\Http\Controllers;

use App\User;
use App\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Image;
use File;
// use function Psy\debug;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = User::all();
        $anak = Anak::all();
        return view('backend.pages.user.index', compact('user','anak'));
    }
    public function profile($id)
    {
	    $data = User::find($id);
        return view('backend.pages.user.view', ['user' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.pages.user.create');
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
                    $data['foto'] = $fileName;
                    unset($data['image']);
                }
              }
        
              $data = User::create($data);
                $data['password'] = \Hash::make($data['password']);
	   

	    Session::flash('message', $data['name'] . ' added successfully');
	    return redirect('/backend/pages/user');
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
    	$data = User::find($id);
        return view('backend/pages/user/edit', ['user' => $data]);
    }
    public function view($id)
    {
        $user = User::find($id);
        $anak = Anak::all();
        return view('backend/pages/user/view', compact('user', 'anak'));
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
        $req = $request->except('_method', '_token', 'submit');
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
            $req['foto'] = $fileName;
            unset($req['image']);
    
              $result = User::find($id);
              if (!empty($result->foto)) {
                File::delete('img/'.$result->foto);
              }
            }else {
              unset($req['image']);
            }
          }else {
            unset($req['image']);
          }
        $req['password'] = \Hash::make($req['password']);
        $data = User::where('id', $id)->update($req);

	    Session::flash('message', $data['name'] . ' updated successfully');
        return redirect('backend/pages/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $data = User::find($id);
	    $data->destroy($id);

	    Session::flash('message', $data['name'] . ' deleted successfully');
	    return redirect('backend/pages/user');
    }
}
