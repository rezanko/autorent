<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Sewa;

class SewaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sewaMobil(Mobil $mobil)
    {
        return view('modalsewa',compact('mobil'));
    }

    public function saveSewa(Request $req)
    {

    }
}
