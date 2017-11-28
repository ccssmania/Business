<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableOutput extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("output",function(Blueprint $table){
            $table->increments("id");
            $table->string("type");
            $table->text("description");
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
        Schema::drop("output");
    }
}
