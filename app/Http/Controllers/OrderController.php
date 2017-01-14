<?php

namespace App\Http\Controllers;

use App\Pembayaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use Illuminate\Support\Facades\Input;
use Barryvdh\DomPDF\Facade;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showOrders()
    {
        $orders = Order::where('user_id',Auth::user()->id)
            ->get()
            ->sortByDesc('id');

        return view('orders',compact('orders'));
    }

    public function detilOrder(Order $order)
    {
        $sewas = $order->Sewa()->get();

        return view('modals/detilorder')
            ->with('sewas',$sewas)
            ->with('order',$order);
    }

    public function showBayarForm(Order $order)
    {
        return view('/modals/modalbayar',compact('order'));
    }

    public function buktiBayar(Request $req)
    {

        $name='';

        if($req->hasFile('pic'))
        {
            $pic = Input::file('pic');

            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$pic->getClientOriginalName();

            $pic->move(public_path().'/images/pembayaran/', $name);
        }

        Pembayaran::create([
           'order_id'=>$req->order_id,
            'pic'=>$name,
        ]);

        $order = Order::find($req->order_id);
        $order->status_bayar = 1;
        $order->save();

        return back()->with('sukses','Bukti pembayaran terkirim! Silahkan tunggu konfirmasi oleh Admin.');
    }

    public function showOrdersAdmin()
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $orders = Order::all()->sortByDesc('id');
        return view('/admin/listorder',compact('orders'));
    }

    public function cekBayar(Order $order)
    {
        $bayar = $order->Pembayaran;

        return view('admin.modalorder.modalcekbayar')
            ->with('order',$order)
            ->with('bayar',$bayar);
    }

    public function confirmBayar(Request $req)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }
        $order = Order::find($req->order_id);
        $order->status_bayar = 2;
        $order->save();

        return back()->with('sukses','Pembayaran telah di konfirmasi!');
    }

    public function invalidBayar(Request $req)
    {
        if(!Auth::user()->admin)
        {
            return redirect('/');
        }

        $order = Order::find($req->order_id);
        $order->status_bayar = 0;
        $order->save();
        $order->Pembayaran->delete();

        return back()->with('sukses','Pembayaran telah di INVALIDASI!');
    }

    public function makeInvoice(Order $order)
    {
        $pdf = Facade::loadView('pdf.invoice', compact('order'));
        return $pdf->download('invoice-'.$order->id.'.pdf');
    }
}
