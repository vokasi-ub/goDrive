<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = 'user';
    protected $fillable = ['id_user'];
}
