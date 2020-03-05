<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = 'admins';
    protected $fillable = ['admin_id','username','password','address'];
}
