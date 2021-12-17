<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFluxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flux', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('bank_id')
            ->constrained()
            ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('integrations', function (Blueprint $table) {
            $table->foreignId('flux_id')
            ->nullable()
            ->constrained('flux')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flux', function (Blueprint $table) {
            $table->dropForeign(['bank_id']);
        });

        Schema::table('integrations', function (Blueprint $table) {
            $table->dropForeign(['flux_id']);
        });
        
        Schema::dropIfExists('flux');
    }
}
