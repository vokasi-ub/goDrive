<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['id_jadwal'];
}
