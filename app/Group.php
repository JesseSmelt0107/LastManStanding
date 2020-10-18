<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function groupedusers() {
        return $this->hasMany('App\Groupeduser');
    }
}
