<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function code()
    {
        return $this->belongsTo('App\People');
    }
}
