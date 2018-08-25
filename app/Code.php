<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    public function people()
    {
        return $this->hasOne('App\People');
    }

}
