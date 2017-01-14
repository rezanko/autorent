<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\User;
use App\Berita;
use App\Tamu;
use App\Type;
use App\Mobil;


class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function adminPage()
  {
    if(!Auth::user()->admin)
    {
      return redirect('/');
    }

    return view('admin/admin');
  }

  public function userList()
  {
    if(!Auth::user()->admin)
    {
      return redirect('/');
    }

    $users = User::all();
    return view('admin/listuser',compact('users'));
  }

  public function userDel(User $user)
  {
    if(!Auth::user()->admin)
    {
      return redirect('/');
    }

    $user->delete();
    return back();
  }

  public function bukuTamu()
  {
    if(!Auth::user()->admin)
    {
      return redirect('/');
    }

    $tamus = Tamu::all();
    return view('admin/bukutamu',compact('tamus'));
  }

  public function manageBerita()
  {
    if(!Auth::user()->admin)
    {
      return redirect('/');
    }

    $beritas = Berita::all()->sortByDesc('id');
    return view('admin/berita',compact('beritas'));
  }

    public function manageTypes()
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $types = Type::all();
        return view('admin/types',compact('types'));
    }

    public function manageMobil()
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $mobils = Mobil::all();
        return view('admin/mobil',compact('mobils'));
    }



}
