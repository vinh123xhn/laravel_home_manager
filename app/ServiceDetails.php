<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    protected $table = 'service_details';

    public function service(){
        return $this->belongsTo('App\Service', 'service_id');
    }
}
