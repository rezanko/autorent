<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Mobil;
use App\Berita;
use App\Tamu;

class PagesController extends Controller
{
    public function beranda()
    {
        $beritas = Berita::all()->sortByDesc('id')->take(3);
        $types = Type::all()->sortByDesc('id')->take(4);

      return view('beranda',compact('beritas','types'));
    }

    public function listType()
    {
      $types = Type::all();

      return view('list-type-mobil',compact('types'));
    }

    public function listBerita()
    {
      return view('list-berita')->with('beritas',Berita::all()->sortByDesc('id'));
    }

    public function berita(Berita $berita)
    {
      return view('berita',compact('berita'));
    }

    public function bukuTamu()
    {
      return view('buku-tamu');
    }
}
