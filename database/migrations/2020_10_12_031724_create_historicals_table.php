<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicals', function (Blueprint $table) {
            $table->id();
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
            /*----------------------------------------------------------------------------------------------------*/
            # Collected data afer checking a tire
            $table->double('current_km')->nullable();
            $table->date('RTD_date')->nullable(); //RTD is when the milimiters of a tire are checked
            $table->float("RTD_value")->nullable();
            /*--------------------------------------------------------------------------------------------------------------*/
            #Calculated data
            $table->double("travel_km")->nullable();
            $table->double('consumed_mm')->nullable(); // millimeters consumed
            $table->double('km_per_mm')->nullable();
            $table->float('mm_km_cost')->nullable();
            $table->double('proyected_km')->nullable();
            $table->float('consumed_percentage');
            /**----------------------------------------------------------------------------------------------------------------- */
            $table->text('tire_observations')->nullable();
            $table->timestamps();

            /** Foreign keys*/
            $table->foreignId('status_id')->constrained();
            $table->foreignId('vehicle_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historicals');
    }
}
