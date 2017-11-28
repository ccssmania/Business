<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = "process";
    public $timestamps = null;
    protected $fillable = ["name","start_time","end_Time"];

    public function tasks(){
    	return $this->hasMany("App\Task");
    }
}
