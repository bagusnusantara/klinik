<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
  protected $table = 'trans_keluhan';
  protected $primaryKey = 'id_keluhan';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'deskripsi',

    ];
    public function user()
      {
        return $this->belongsTo('App\User','id');
      }
}
