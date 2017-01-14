<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    protected $fillable = array('order_id','mobil_id','tgl_sewa','tgl_kembali','with_sopir','status_sewa');

    public function Order()
    {
      return $this->belongsTo('App\Order');
    }

    public function Mobil()
    {
      return $this->belongsTo('App\Mobil');
    }
}
