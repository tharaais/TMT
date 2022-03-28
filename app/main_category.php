<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class main_category extends Model
{
    //
    public function sub_categories()
    {
        return $this->hasMany('App\sub_categories');
    }
}
