<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSynthesesTfjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syntheses_tfjs', function (Blueprint $table) {
            $table->id();
            $table->time('debut');
            $table->time('fin');
            $table->time('duree');
            $table->integer('evenements');
            $table->integer('mouvements');
            $table->time('transfert_sda');
            $table->foreignId('eod_reports_id')
            ->constrained()
            ->onDelete('cascade');
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
        Schema::table('syntheses_tfjs', function (Blueprint $table) {
            $table->dropForeign(['eod_reports_id']);
        });

        Schema::dropIfExists('syntheses_tfjs');
    }
}
