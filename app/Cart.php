<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    protected $fillable = array('user_id','mobil_id','tgl_sewa','tgl_kembali','with_sopir','subtotal');

    public function User()
    {
      return $this->belongsTo('App\User');
    }

    public function Mobil()
    {
      return $this->belongsTo('App\Mobil');
    }
}
