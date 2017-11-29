<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    protected $table = "output";
    public $timestamps = null;
    protected $fillable = ["type","description","task_id"];

    public function task(){
    	return $this->belongsTo("App\Task");
    }
}
