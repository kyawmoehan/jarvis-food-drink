<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function menus($value='')
    {
        return $this->hasMany('App\Menu','id');
    }
    public function bestoffers($value='')
    {
        return $this->hasMany('App\Bestoffer','id');
    }
}
