<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEodReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eod_reports', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('bank_id')
            ->constrained()
            ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('eod_reports', function (Blueprint $table) {
            $table->unique(['date', 'bank_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eod_reports', function (Blueprint $table) {
            $table->dropForeign(['bank_id']);
        });

        Schema::dropIfExists('eod_reports');
    }
}
