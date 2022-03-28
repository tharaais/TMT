<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //
    
     public function item_images()
    {
        return $this->hasMany('App\item_images');
    }
    
     public function sub_category()
    {
        return $this->belongsTo('App\sub_category');
    }
}
