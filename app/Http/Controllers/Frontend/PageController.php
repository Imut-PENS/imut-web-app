<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Image;
use File;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Imunisasi;
use App\Rekomgizi;
use App\Pertumbuhananak;
use App\Perkembangananak;
use App\Message;
use App\Events\NewMessage;
use App\Info;
use App\User;
use App\Anak;
use App\JadwalImunisasi;
use App\JenisImunisasi;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class PageController extends Controller
{
    public function index(){
        $imunisasi = Imunisasi::all();
        
        $info = Info::all();
       
        return view('frontend.pages.beranda',compact('imunisasi','info'));
      }
      public function login(){
        return view('frontend.pages.login');
      }
      public function register(){
        return view('frontend.pages.register');
      }
      public function faq(){
        return view('frontend.pages.faq');
      }
      public function artikel(){
        $info = Info::all();
        return view('frontend.pages.artikel',compact('info'));
      }
      public function rekomen(){
        $rekomgizi = Rekomgizi::all()->first();
        return view('frontend.pages.rekomgizi',compact('rekomgizi'));
      }
      public function detail_artikel($id){
        $info = Info::find($id);
        $data = Info::all();
        return view('frontend.pages.detail_artikel',compact('info','data'));
      }
      public function layanan(){
        return view('frontend.pages.layanan');
      }
      public function tentang(){
        return view('frontend.pages.tentang');
      }
      public function perkembangan(){
        $perkembangan = Perkembangananak::all();
        return view('frontend.pages.perkembangananak', compact('perkembangan'));
      }
      public function grafik(){
        return view('frontend.pages.dataanak');
      }
      public function imunisasi(){
        $imunisasi = Imunisasi::all();
        $jenis = JenisImunisasi::all();
        return view('frontend.pages.imunisasi', compact('imunisasi','jenis'));
      }
      public function detailimunisasi($id){
        $imunisasi = Imunisasi::find($id);
        $imun = Imunisasi::all();
        $jenis = JenisImunisasi::all();
        return view('frontend.pages.detailimunisasi', compact('imunisasi','jenis','imun'));
      }
      public function profile($id){
        $user = User::find($id);
        return view('frontend.pages.profile', compact('user'));
      }
      public function dataanak($id){
        $user = User::find($id);
        return view('frontend.pages.dataanak', compact('user'));
      }
      public function tambahanak($id){
        $user = User::find($id);
        return view('frontend.pages.tambahanak', compact('user'));
      }
      public function tambahpertumbuhan($id){
        $anak = Anak::find($id);
        return view('frontend.pages.tambahpertumbuhan', compact('anak'));
      }
      public function detailanak($id){ 
        $anak = Anak::find($id);
        $tumbuh = Pertumbuhananak::all();
        return view('frontend.pages.detailanak', compact('anak','tumbuh'));
      }
      public function tambahtumbuh($id){ 
        $anak = Anak::find($id);
        $tumbuh = Pertumbuhananak::all();
       
        return view('frontend.pages.tambahpertumbuhan', compact('anak','tumbuh'));
      }

      public function kondisianak($id){ 
        $anak = Anak::find($id);
        $tumbuh = Pertumbuhananak::all();
        $last = DB::table('pertumbuhananaks')->where('anak_id', $id)->orderBy('id', 'desc')->first();
        
        return view('frontend.pages.kondisianak', compact('anak','tumbuh','last'));
      }
      public function grafiktumbuh($id)
      {
        $anak = Anak::find($id);
        $tumbuh = Pertumbuhananak::first();
        return view('frontend.pages.grafiktumbuh',compact('anak','tumbuh'));
      }
      public function grafikresult($id){ 
        $anak = Anak::all();
        $result = DB::table('pertumbuhananaks')
                  ->select('anak_id','usia','tinggi_badan','berat_badan','lingkar_kepala')
                  ->join('anaks', 'pertumbuhananaks.anak_id', '=', 'anaks.id')
                  ->get(array(
                    'anak_id',
                    'usia',
                    'tinggi_badan',
                    'berat_badan',
                    'lingkar_kepala'
                  ));
      return response()->json($result);
      }
      public function updateanak(Request $request, $id){ 
        $anak = Anak::find($id);
        $anak->user_id = $request->user_id;
        $anak->nama_anak = $request->nama_anak;
        $anak->tanggal_lahir = $request->tanggal_lahir;
        $anak->jenis_kelamin = $request->jenis_kelamin;
       
        if($request->hasFile('foto_anak')){
            $anak->foto_anak = $request->file('foto_anak')->getClientOriginalName();
            $foto = $request->file('foto_anak');
            $namaFoto = $foto->getClientOriginalName();
            $path = $foto->move(public_path('/img'), $namaFoto);
        }

        $anak->save();
            
        return redirect('/front/detailanak/'.$id);
      }
      
      public function buatanak(Request $request, $id){
        $user = User::find($id);
        $anak = Anak::all();

        $tumbuh = Pertumbuhananak::all();
        $request->validate([
            'nama_anak'      => 'required|string',
            'tanggal_lahir'     => 'required',
            'jenis_kelamin'  => 'required'
            
        ]);
        $anaks = new Anak([
            
          'nama_anak' => $request->nama_anak,
          'tanggal_lahir' => $request->tanggal_lahir,
          'jenis_kelamin' => $request->jenis_kelamin,
          'user_id' => $id,
          'foto_anak' => $request->file('foto_anak')->getClientOriginalName()
        ]);
        $foto = $request->file('foto_anak');
        $namaFoto = $foto->getClientOriginalName();
        $path = $foto->move(public_path('/img'), $namaFoto);
        $anaks->save();
      return redirect('/front/tambahtumbuh/'.$anaks->id);
      }
      public function ptumbuh(Request $request, $id){
        $anak = Anak::find($id);
        $tumbuh = Pertumbuhananak::all();
        $data = $request->all();
        $data = Pertumbuhananak::create($data);
        return redirect('/front/detailanak/'.$id);
      }
      public function jadwal(){
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
        return view('frontend.pages.jadwalimunisasi' , compact('jadwal_imunisasi','jenis_imunisasi','calendar_details'));
      }
      public function jadwalidai()
      {
        return view('frontend.pages.jadwalidai');
      }

      public function konsultasi()
      {
        return view('frontend.pages.konsultasi');
      }
      public function get(){

        $contacts = User::where('id', '!=', auth()->id())->get();

        $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('read', false)
            ->groupBy('from')
            ->get();

        $contacts = $contacts->map(function($contact) use($unreadIds){
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

            $contact->unread = $contactUnread ? $contactUnread->messages_count :0;

            return $contact;
        });

        return response()->json($contacts);
    }
    public function getMessagesFor($id){
       
        Message::where('from', $id)->where('to', auth()->id())->update(['read' => true]);
        
        $messages = Message::where(function($q) use ($id){
            $q->where('from', auth()->id());
            $q->where('to', $id);
        })->orWhere(function($q) use($id){
            $q->where('from', $id);
            $q->where('to', auth()->id());
        })
        ->get();
        return response()->json($messages);
    }
    public function send(Request $request){
        $message = Message::create([
            'from' => auth()->id(),
            'to' => $request->contact_id,
            'text' => $request->text
        ]);
        
        broadcast(new NewMessage($message));
        return response()->json($message);
    }
      
}

