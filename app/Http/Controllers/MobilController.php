<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Mobil;
use App\Type;
use Illuminate\Support\Facades\Auth;

class MobilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listMobil($type_id)
    {
        $type = Type::find($type_id);
        $mobils = $type->Mobil;

        return view('list-mobil')
            ->with('type',$type)
            ->with('mobils',$mobils);
    }

    public function jadwalSewa(Type $type, Mobil $mobil)
    {
        return view('modals.jadwalsewa')->with('mobil',$mobil);
    }

    public function addMobil()
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $types = Type::all();
        $key = array();
        $value = array();
        $array = array();
        foreach ($types as $type)
        {
            array_push($key,$type->id);
            array_push($value,$type->nama);

        }

       $array = array_combine($key,$value);
        return view('admin/modalmobil/addmobil', compact('array'));
    }

    public function saveAddMobil(Request $req)
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

            $pic->move(public_path().'/images/mobil/', $name);
        }

        Mobil::create([
            'type_id'=>$req->type_id,
            'plat_nomor'=>$req->plat_nomor,
            'warna'=>$req->warna,
            'tahun'=>$req->tahun,
            'pic'=>$name,
        ]);
        return back();
    }

    public function editMobil(Mobil $mobil)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $types = Type::all();
        $key = array();
        $value = array();
        foreach ($types as $type)
        {
            array_push($key,$type->id);
            array_push($value,$type->nama);

        }

        $array = array_combine($key,$value);

        return view('admin/modalmobil/editmobil')
            ->with('array',$array)
            ->with('mobil',$mobil);
    }

    public function saveEditMobil(Request $req, Mobil $mobil)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $mobil->type_id = $req->type_id;
        $mobil->plat_nomor = $req->plat_nomor;
        $mobil->warna = $req->warna;
        $mobil->tahun = $req->tahun;

        if($req->hasFile('pic'))
        {
            $pic = Input::file('pic');

            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$pic->getClientOriginalName();

            $pic->move(public_path().'/images/types/', $name);

            $mobil->pic = $name;
        }

        $mobil->save();

        return redirect('/admin/mobil');
    }

    public function delMobil(Mobil $mobil)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }
        $mobil->delete();
        return back();
    }
}
