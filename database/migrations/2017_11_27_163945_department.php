<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Department extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("department", function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->integer("factory_id")->unsigned()->index();
            $table->string("type");
            $table->integer("extension_m2");
            $table->integer("number_employees");
            $table->string("responsible");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("department");
    }
}
