<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item_images extends Model
{
    //
     public function item()
    {
        return $this->belongsTo('App\item');
    }
}
