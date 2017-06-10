<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Expedient extends Model
{
    //

    protected $fillable = ["defendant", "overview"];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function resources(){
        return $this->hasMany(Resource::class);
    }

    public function scopeSearch($query, $search){
        if( ! empty($search)){
            return $query
                ->where('defendant', 'LIKE', '%'.$search.'%')
                ->orWhere('defendant', 'LIKE', '%'.strtoupper($search).'%');
        }

        return $query;
    }
}
