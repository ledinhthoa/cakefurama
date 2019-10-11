<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table ="contracts";
    public function service_detail(){
        return $this->hasMany('App\Service_Detail','id_contract','id');

    }
    public function contract(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }
}
