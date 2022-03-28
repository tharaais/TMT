<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider_item extends Model
{
    //
     public function slider()
    {
        return $this->belongsTo('App\slider');
    }
}
