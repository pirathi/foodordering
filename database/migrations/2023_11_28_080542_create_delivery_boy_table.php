<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryBoyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_boy', function (Blueprint $table) {
            $table->bigIncrements('delivery_id');
            $table->string('delivery_boy_name');
            $table->string('delivery_boy_phone');
            $table->string('delivery_boy_location');
            $table->string('delivery_boy_email');
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
        Schema::dropIfExists('delivery_boy');
    }
}
