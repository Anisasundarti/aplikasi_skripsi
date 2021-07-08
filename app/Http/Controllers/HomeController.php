<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKejahatan;
use App\Models\LokasiKejahatan;
use App\Models\Kelurahan;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */



    public function indexpeta()
    {
      $petas = Peta::all();
      $petass = DB::table('petas')
            ->join('poliss','datlap.id','=','poliss.id')
            ->select('petas.*')
            ->get();

dd($datlap);
    return view ('home', compact('petas'));

      return view('home');
    }

     public function index()
    {
        $jenis_kejahatan=JenisKejahatan::pluck('jenis_kejahatan', 'id')->toArray();
        $loaJananIlir = Kelurahan::where('kecamatan_id', 1)->pluck('kecamatan_id', 'id')->toArray();
        $samSeb = Kelurahan::where('kecamatan_id', 2)->pluck('kecamatan_id', 'id')->toArray();

        $data2019=LokasiKejahatan::where('tahun_id', 1)
            ->orderBy('id_jenis_kejahatan', 'asc')
            ->get()
            ->countBy('id_jenis_kejahatan')
            ->flatten()
            ->toArray();
       
        $data2020skip1=LokasiKejahatan::where('tahun_id', 2)
            ->orderBy('id_jenis_kejahatan', 'asc')
            ->get()
            ->countBy('id_jenis_kejahatan')
            ->flatten()
            ->toArray();

        $data2020 = collect(['101' => 0, $data2020skip1])->flatten(1);

        // $data2020a=LokasiKejahatan::where('tahun_id', 2)
            
        //     ->get()
        //     ->groupBy('id_jenis_kejahatan');
        //     // ->countBy('id_jenis_kejahatan')
        //     // ->flatten()
        //     // ->toArray();
        // dd($data2020);
        return view('home', compact('jenis_kejahatan','data2019', 'data2020'));

    }

    
    
}
