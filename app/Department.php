<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $table = "department";
    public $timestamps = null;
    protected $fillable = ["name","factory_id","type","extension_m2","number_employees","responsible"];

}
