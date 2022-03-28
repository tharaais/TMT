<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    //
     public function main_categories()
    {
        return $this->belongsTo('App\main_categories');
    }
    
    public function item()
    {
        return $this->hasMany('App\item');
    }
}
