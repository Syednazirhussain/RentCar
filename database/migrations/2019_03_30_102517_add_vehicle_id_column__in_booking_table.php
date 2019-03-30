<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVehicleIdColumnInBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking', function (Blueprint $table) {
            $table->integer('vehicle_id')->nullable()->index();
            $table->foreign('vehicle_id', 'booking_ibfk_3')->references('id')->on('vehicles')
                ->onUpdate('Cascade')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking', function (Blueprint $table) {
            $table->dropForeign('booking_ibfk_3');
            $table->dropColumn('vehicle_id');
        });
    }
}
