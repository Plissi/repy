<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTFJSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tfj', function (Blueprint $table) {
            $table->id();
            $table->string('tache');
            $table->string('debut');
            $table->string('fin');
            $table->string('observation');
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
        Schema::table('post_tfj', function (Blueprint $table) {
            $table->dropForeign(['eod_reports_id']);
        });

        Schema::dropIfExists('post_tfj');
    }
}
