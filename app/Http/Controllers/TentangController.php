<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tentang;
use DB;

class TentangController extends Controller
{
    //
    public function index()
    {
      return view ('tentang.index');
    }
}
