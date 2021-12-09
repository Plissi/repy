<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('norms', function (Blueprint $table) {
            $table->id();
            $table->string('tache');
            $table->time('heure');
            $table->foreignId('bank_id')
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
        Schema::table('norms', function (Blueprint $table) {
            $table->dropForeign(['bank_id']);
        });
        
        Schema::dropIfExists('norms');
    }
}
