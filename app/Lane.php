<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lane extends Model
{
    //
    public function task() {
		$this->hasMany('\App\Task');

    }
}
