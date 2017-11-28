<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tooling extends Model
{
    protected $table = "tooling";
    public $timestamps = null;
    protected $fillable = ["name","description"];
}
