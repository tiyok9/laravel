<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;


class Data extends Model
{
    protected $collection = 'data';

    protected $fillable = ['nik','nama','lahir','alamat','penghasilan','job','riwayat'];

    protected $casts = ['riwayat'=>'array'];
}
