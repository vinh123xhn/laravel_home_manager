<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';

    public function details() {
        return $this->hasMany('App\ServiceDetails');
    }
}
