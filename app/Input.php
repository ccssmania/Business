<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $table = "input";
    public $timestamps = null;
    protected $fillable = ["type","description","task_id"];
}
