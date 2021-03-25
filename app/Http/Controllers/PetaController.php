<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LokasiKejahatan;

class PetaController extends Controller
{
	/*public function __construct()
    {
        $this->middleware('auth');
    }
*/
    public function index()
    {
    	$lokasi = LokasiKejahatan::all();
    	return view('peta.index',compact('lokasi'));
    }
}
