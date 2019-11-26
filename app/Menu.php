<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name','price','image','category_id'
    ];
    public function categories($value='')
    {
        return $this->belongsTo('App\Category','category_id');
    }
}
