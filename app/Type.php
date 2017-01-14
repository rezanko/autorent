<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'typemobil';

    protected $fillable = array('nama','jenis','kursi','tarif','pic');

    public function Mobil()
    {
      return $this->hasMany('App\Mobil');
    }

}
