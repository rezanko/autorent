<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Cart;
use App\Mobil;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showCart()
    {
        $carts = Cart::where('user_id',Auth::user()->id)->get();

      return view('cart',compact('carts'));
    }

    public function addToCart(Request $req)
    {
        $dateSewa = new \DateTime($req->tgl_sewa);
        $dateNow = new \DateTime(\Carbon\Carbon::now());

        if($dateSewa < $dateNow->sub(new \DateInterval('P1D')))
        {
            return back()->with('gagal','Tanggal sewa yang Anda input tidak valid!');
        }

        if(Cart::where('user_id',Auth::user()->id)->where('mobil_id',$req->mobil_id)->count())
        {
            return back()->with('gagal','Mobil ini sudah ada di Shopping Cart!');
        }

        $subtotal = $req->lama_sewa * Mobil::find($req->mobil_id)->Type->tarif;
        if($req->with_sopir)
        {
            $subtotal += $req->lama_sewa * 100000;
        }

        $lamasewa = $req->lama_sewa - 1;

        $dateKembali = new \DateTime($req->tgl_sewa);
        $dateKembali->add(new \DateInterval('P'.$lamasewa.'D'));

        if($req->with_sopir)
        {
            Cart::create([
                'user_id'=>Auth::user()->id,
                'mobil_id'=>$req->mobil_id,
                'tgl_sewa'=>$dateSewa,
                'tgl_kembali'=>$dateKembali,
                'with_sopir'=>$req->with_sopir,
                'subtotal'=>$subtotal,
            ]);
        }
        else
        {
            Cart::create([
                'user_id'=>Auth::user()->id,
                'mobil_id'=>$req->mobil_id,
                'tgl_sewa'=>$dateSewa,
                'tgl_kembali'=>$dateKembali,
                'subtotal'=>$subtotal,
            ]);
        }

      return back()->with('sukses','Mobil sukses ditambahkan ke Shopping Cart!');
    }

    public function delCart(Cart $cart)
    {
      $cart->delete();
      return back();
    }

    public function checkout()
    {
        $carts = Cart::where('user_id',Auth::user()->id)->get();

        $total = 0;

        foreach ($carts as $cart)
        {


            $total += $cart->subtotal;
        }

        $order = new Order;
        $order->total = $total;
        $order->status_bayar = 0;

        Auth::user()->Order()->save($order);

        foreach ($carts as $cart)
        {
            $order->Sewa()->create([
                'mobil_id'=>$cart->mobil_id,
                'tgl_sewa'=>$cart->tgl_sewa,
                'tgl_kembali'=>$cart->tgl_kembali,
                'with_sopir'=>$cart->with_sopir,
            ]);
            $cart->delete();
        }

        return back()->with('sukses','Transaksi sewa Anda sukses!');;

    }
}
