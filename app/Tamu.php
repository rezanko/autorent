<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{

  protected $fillable = [
      'nama', 'telp', 'email', 'pesan',
  ];
    protected $table = 'bukutamu';


}
