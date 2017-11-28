<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableOperations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("operations", function(Blueprint $table){
            $table->increments("id");
            $table->string("program_name");
            $table->string("mu");
            $table->text("cutter_description");
            $table->integer("pos_mag");
            $table->double("z_min");
            $table->text("work_type");
            $table->string("pos_table");
            $table->double("step_xy");
            $table->double("step_z");
            $table->double("profile_offset");
            $table->double("sgross_offset");
            $table->double("plane_offset");
            $table->integer("rpm");
            $table->integer("ava");
            $table->integer("task_id")->unsigned();
            $table->foreign("task_id")->references("id")->on("task");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("operations");
    }
}
