<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', length: 50);
            $table->string('landing_station', length: 50);
            $table->string('arrival_station', length: 50);
            $table->time('landing_time', precision: 0);
            $table->time('arrival_time', precision: 0);
            $table->string('code_comp', length: 2);
            $table->mediumInteger('code_train'); //5 numeri
            $table->tinyInteger('carriages');
            $table->boolean('is_on_time');
            $table->boolean('is_aborted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
