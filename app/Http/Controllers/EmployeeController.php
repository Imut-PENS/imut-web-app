<?php

namespace App\Http\Controllers;


use App\Employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Image;
use File;
class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:employee');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $data = Employee::orderBy('id')->get();
        return view('backend.pages.employee.index', ['employee' => $data]);
    }
    public function profile($id)
    {
	    $data = Employee::find($id);
        return view('backend.pages.employee.view', ['employee' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|string',
            'password'  => 'required',
            'foto'  => 'required',
            'role'  => 'required'
            
        ]);
        $employee = new Employee([
            
          'name' => $request->name,
          'email' => $request->email,
          'password' => $request->password,
          'foto' => $request->file('foto')->getClientOriginalName(),
          'role' => $request->role,
        ]);
        $foto = $request->file('foto');
        $namaFoto = $foto->getClientOriginalName();
        $path = $foto->move(public_path('/img'), $namaFoto);
        $employee['password'] = \Hash::make($employee['password']);
        $employee->save();
	    \Session::flash('Employee added successfully');
	    return redirect('/backend/pages/employee');
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
    	$data = Employee::find($id);
        return view('backend/pages/employee/edit', ['employee' => $data]);
    }
    public function view($id)
    {
        $employee = Employee::find($id);
        return view('backend/pages/employee/view', compact('employee'));
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
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->password = $request->password;

        $employee->role = $request->role;
        if($request->hasFile('foto')){
            $employee->foto = $request->file('foto')->getClientOriginalName();
            $foto = $request->file('foto');
            $namaFoto = $foto->getClientOriginalName();
            $path = $foto->move(public_path('/img'), $namaFoto);
        }
        $employee['password'] = \Hash::make($employee['password']);
        $employee->save();
        \Session::flash('Employee update successfully');   
        return redirect('/backend/pages/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $data = Employee::find($id);
	    $data->destroy($id);

	    Session::flash('message', $data['name'] . ' deleted successfully');
	    return redirect('backend/pages/employee');
    }
}

