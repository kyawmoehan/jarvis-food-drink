<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bestoffer extends Model
{
    protected $fillable =[
        'title','variety','category_id','image'
    ];
}
