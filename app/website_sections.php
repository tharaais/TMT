<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class website_sections extends Model
{
    //
    public function section_features()
    {
        return $this->hasMany('App\section_features');
    }
}
