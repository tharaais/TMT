<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section_features extends Model
{
    //
    public function website_sections()
    {
        return $this->belongsTo('App\website_sections');
    }
}
