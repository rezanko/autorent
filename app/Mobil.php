<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';

    protected $fillable = array('type_id','plat_nomor','warna','tahun','pic');

    public function Type()
    {
      return $this->belongsTo('App\Type');
    }

    public function Sewa()
    {
      return $this->hasMany('App\Sewa');
    }
}
