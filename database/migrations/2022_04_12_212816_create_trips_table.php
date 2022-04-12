<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            
            $table->string('destination','50');
            $table->string('address','50');
            $table->string('departure_airport','50');
            $table->date('departure_date');
            $table->tinyInteger('duration_holiday');
            $table->string('city');
            $table->tinyInteger('rating')->nullable();
            $table->decimal('price',8,2);

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
        Schema::dropIfExists('trips');
    }
}
