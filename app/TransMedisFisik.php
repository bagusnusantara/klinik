<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransMedisFisik extends Model
{
  protected $table = 'trans_medis_fisik';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'deskripsi',

    ];

}
