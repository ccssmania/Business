<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Controll;
class Task extends Model
{
    protected $table = "task";
    public $timestamps = null;
    protected $fillable = ["name","description","start_time","end_time","setup","cycletime","process_id","department_id","machine_id","tooling_id"];


    public function controll(){
    	return $this->hasOne("App\Controll")->withDefault(function(){
    		return new Controll;
    	});	
    }

    public function process(){
    	return $this->belongsTo("App\Process");
    }
}
