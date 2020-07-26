<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->string('economic_number');
            $table->string('brand');
            $table->string('design');
            $table->string('size');
            $table->date('mounting_date');
            $table->float('tire_cost');
            $table->string('tire_type');
            $table->float('otd'); //Tire initial mllimeters 
            $table->string('tire_position');
            $table->double('initial_km');
            $table->double('km_per_mm');
            $table->double('proyected_km');
            $table->float('km_cost');
            $table->text('tire_observations');
            $table->string('status');
            $table->timestamps();

            /** Foreign keys*/
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tires');
    }
}
