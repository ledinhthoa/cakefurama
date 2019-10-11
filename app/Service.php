<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';

    public function type__service(){
        return $this->belongsTo('App\Type_Service','id_type','id');
    }
    public function service__detail(){
        return $this->hasMany('App\Service_Detail','id_services','id');
    }
}
