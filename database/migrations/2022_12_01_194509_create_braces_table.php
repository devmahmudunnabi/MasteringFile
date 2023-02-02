<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('braces', function (Blueprint $table) {            
                $table->increments("id");
                $table->string("br_name");
                $table->string("br_manager");
                $table->string("br_phone");
                $table->string("br_email");
                $table->integer("status");
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('braces');
    }
};
