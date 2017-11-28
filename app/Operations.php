<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    protected $table
    public $timestamps = null;
    protected $fillable = ["program_name","mu","cutter_description","pos_mag","z_min","work_type","pos_table","step_xy","step_z","profile_offset","sgross_offset","plane_offset","rpm","ava",	"task_id"];
}
