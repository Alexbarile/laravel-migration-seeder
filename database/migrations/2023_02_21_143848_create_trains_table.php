<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('stazione_partenza', 40);
            $table->string('stazione_arrivo', 40);
            $table->timeTz('orario_partenza');
            $table->timeTz('orario_arrivo');
            $table->string('codice_treno', 20);
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->tinyInteger('in_orario')->default(1);
            $table->boolean('cancellato');
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
        Schema::dropIfExists('trains');
    }
};
