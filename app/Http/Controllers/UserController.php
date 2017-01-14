<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function dataDiri()
  {
    $user = Auth::user();
    return view('datadiri',compact('user'));
  }

  public function update(Request $request)
  {
    $user = Auth::user();

    $this->validate($request,
    [
      'name' => 'required|max:255',
      'alamat' => 'required|max:255',
    ]);

    if($user->name!=$request->name)
    {
      $user->name = $request->name;
    }

    if($user->ktp!=$request->ktp)
    {
      $this->validate($request,
      [
        'ktp' => 'required|max:255|unique:users',
      ]);
      $user->ktp = $request->ktp;
    }

    if($user->sim!=$request->sim)
    {
      $user->sim = $request->sim;
    }

    if($user->alamat!=$request->alamat)
    {
      $user->alamat = $request->alamat;
    }

    $user->save();


    return back()->with('sukses','1');
  }

}
