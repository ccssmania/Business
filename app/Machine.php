<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $table = "machine";
    public $timestamps = null;
    protected $fillable = ["department_id","line_id","cell_id","dimension_m2","weight","name","type","description"];
}
