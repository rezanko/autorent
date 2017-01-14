<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addBerita()
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        return view('admin/modalberita/addberita');
    }

    public function saveAddBerita(Request $req)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $name='';

        if($req->hasFile('pic'))
        {
            $pic = Input::file('pic');

            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$pic->getClientOriginalName();

            $pic->move(public_path().'/images/berita/', $name);
        }

        Berita::create([
            'judul'=>$req->judul,
            'pic'=>$name,
            'isi'=>$req->isi,
        ]);
        return back();
    }

    public function editBerita(Berita $berita)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        return view('admin/modalberita/editberita',compact('berita'));
    }

    public function saveEditBerita(Request $req, Berita $berita)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $berita->judul = $req->judul;
        $berita->isi = $req->isi;

        if($req->hasFile('pic'))
        {
            $pic = Input::file('pic');

            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$pic->getClientOriginalName();

            $pic->move(public_path().'/images/berita/', $name);

            $berita->pic = $name;
        }

        $berita->save();

        return redirect('/admin/berita');
    }

    public function delBerita(Berita $berita)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $berita->delete();
        return back();
    }
}
