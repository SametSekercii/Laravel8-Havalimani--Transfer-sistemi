<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("transfer_id");
            $table->integer("from_location_id");
            $table->integer("to_location_id");
            $table->float("price");
            $table->string("Airline")->nullable();
            $table->string("flightnumber")->nullable();
            $table->string("flightdate")->nullable();
            $table->string("flighttime")->nullable();
            $table->string("pickuptime")->nullable();
            $table->string("note")->nullable();
            $table->string("IP")->nullable();
            $table->string("status",20)->default("Onay Bekliyor");
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
        Schema::dropIfExists('reservations');
    }
}
