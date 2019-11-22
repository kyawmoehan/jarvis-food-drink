<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'number','phone','email','date','arrivingtime','leavingtime','table','status'
    ];
}
