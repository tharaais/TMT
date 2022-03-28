<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    //
    public function slider_item()
    {
        return $this->hasMany('App\slider_item');
    }
}
