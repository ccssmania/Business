<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMachine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("machine", function(Blueprint $table){
            $table->increments("id");
            $table->integer("department_id")->unsigned()->index();
            $table->integer("line_id")->unsigned()->index();
            $table->integer("cell_id")->unsigned()->index();
            $table->integer("dimension_m2");
            $table->integer("weight");
            $table->string("name");
            $table->string("type");
            $table->text("description");   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("machine");
    }
}
