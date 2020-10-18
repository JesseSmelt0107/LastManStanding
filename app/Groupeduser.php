<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupeduser extends Model
{
    //

    public function user(){
        return $this->hasOne('App\User');
    }

    public function group(){
        return $this->hasOne('App\Group');
    }

}
