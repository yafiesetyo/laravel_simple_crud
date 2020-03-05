<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class main extends Model
{
    protected $table = 'employees';
    protected $fillable = ['employee_id','employee_num','name','position','rating'];
}
