<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Type;
use Illuminate\Support\Facades\Auth;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addType()
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        return view('admin/modaltypes/addtype');
    }

    public function saveAddType(Request $req)
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

            $pic->move(public_path().'/images/types/', $name);
        }

        Type::create([
            'nama'=>$req->nama,
            'jenis'=>$req->jenis,
            'kursi'=>$req->kursi,
            'tarif'=>$req->tarif,
            'pic'=>$name,
        ]);
        return back();
    }

    public function editType(Type $type)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        return view('admin/modaltypes/edittype',compact('type'));
    }

    public function saveEditType(Request $req, Type $type)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $type->nama = $req->nama;
        $type->jenis = $req->jenis;
        $type->kursi = $req->kursi;
        $type->tarif = $req->tarif;

        if($req->hasFile('pic'))
        {
            $pic = Input::file('pic');

            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$pic->getClientOriginalName();

            $pic->move(public_path().'/images/types/', $name);

            $type->pic = $name;
        }

        $type->save();

        return redirect('/admin/types');
    }

    public function delType(Type $type)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }
        $type->delete();
        return back();
    }
}
