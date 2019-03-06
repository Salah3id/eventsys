<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hall_id');
            $table->integer('te_id');
            $table->date('event_date');
            $table->enum('type',['repet','ones','reset']);
            $table->string('level');
            $table->string('sub');
            $table->string('lesson');
            $table->string('hours');
            $table->integer('price_id');
            $table->enum('price_type',['for_one','for_hour','for_hall']);
            $table->integer('which_id'); /* which event you want to reset */
            $table->string('reason');
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
        Schema::dropIfExists('events');
    }
}
