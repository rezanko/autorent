<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = array('user_id','total','status_bayar');

    public function User()
    {
      return $this->belongsTo('App\User');
    }

    public function Sewa()
    {
      return $this->hasMany('App\Sewa');
    }

    public function Pembayaran()
    {
        return $this->hasOne('App\Pembayaran');
    }
}
