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
        Schema::create('sales', function (Blueprint $table) {
            $table->increments("id");
            $table->date("sdate");
            $table->integer("sbr_id");
            $table->integer("sinvoice");
            $table->integer("sproduct_id");
            $table->integer("squantity");
            $table->float("sdis");
            $table->float("sdis_amount");
            $table->float("stotal_amount");
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
        Schema::dropIfExists('sales');
    }
};
