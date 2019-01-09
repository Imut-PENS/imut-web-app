<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

use MaddHatter\LaravelFullcalendar\Facades\Calendar;

use Auth;
use Validator;
use App\JadwalImunisasi;
use App\JenisImunisasi;
class JadwalImunisasiController extends Controller
{
    public function index(){
        $jenis_imunisasi = JenisImunisasi::all();
        $jadwal_imunisasi = JadwalImunisasi::get();
        $jadwal_list = [];
        foreach($jadwal_imunisasi as $key => $event){
            $jadwal_list[] = Calendar::event(
                $event->jenis_imunisasi['jenis_imunisasi'],
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day')
            );
        }
        $calendar_details = Calendar::addEvents($jadwal_list);
        return view('backend.pages.jadwal_imunisasi.index' , compact('jadwal_imunisasi','jenis_imunisasi','calendar_details'));
    }
    public function addEvents(Request $request){
        $validator = Validator::make($request->all(),[
            'jenis_imunisasis_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            
        ]);
        if($validator->fails()){
            \Session::flash('warning', 'Please enter the valid details');
            return Redirect::to('/jadwal_imunisasi')->withInput()->withErrors($validator);

        }else{
        $jadwal = new JadwalImunisasi;
        $jadwal->jenis_imunisasis_id = $request['jenis_imunisasis_id'];
        $jadwal->start_date = $request['start_date'];
        $jadwal->end_date = $request['end_date'];
        $jadwal->save();

        \Session::flash('success','Jadwal Added Succesfully');
        return Redirect::to('/jadwal_imunisasi');
        }
    }
}
