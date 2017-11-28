<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("task",function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->string("description");
            $table->date("start_time");
            $table->date("end_time");
            $table->double("setup",9,4);
            $table->double("cycletime",9,4);
            $table->integer("process_id")->unsigned()->index();
            $table->integer("department_id")->unsigned()->index();
            $table->integer("machine_id")->unsigned()->index();
            $table->integer("tooling_id")->unsigned();
            $table->foreign("tooling_id")->references("id")->on("tooling");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("task");
    }
}
