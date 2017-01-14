<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;

class TamuController extends Controller
{

  public function addEntry(Request $req)
  {
    Tamu::create([
      'nama' => $req->nama,
      'telp' => $req->telp,
      'email' => $req->email,
      'pesan' => $req->pesan,
    ]);

    return back();
  }
}