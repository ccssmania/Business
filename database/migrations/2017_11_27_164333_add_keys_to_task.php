<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeysToTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("task",function(Blueprint $table){
            $table->foreign("process_id")->references("id")->on("process");
            $table->foreign("department_id")->references("id")->on("department");
            $table->foreign("machine_id")->references("id")->on("machine");
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
        //
    }
}
