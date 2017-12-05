<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableControlls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("controlls", function(Blueprint $table){
            $table->increments("id");
            $table->integer("task_id")->unsigned();
            $table->dateTime("r_start_date");
            $table->dateTime("r_end_date");
            $table->double("r_setup");
            $table->double("r_cycletime");
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
        //
    }
}
