<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //

    public function expedient(){
        return $this->belongsTo(Expedient::class);
    }
}
