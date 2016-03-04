<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function task() {

    	$this->belongsToMany('\App\Task');
    }
}
