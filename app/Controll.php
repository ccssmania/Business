<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controll extends Model
{
    protected $table = "controlls";

    public $timestamps = null;

    protected $fillable = ["task_id", "r_start_date", "r_end_date", "r_setup", "r_cycletime"];

    public function task(){
    	return $this->belongsTo("App\Task");
    }
}
