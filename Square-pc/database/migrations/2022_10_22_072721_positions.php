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
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cpu_id')->constraint('cpus')->cascadeOnDelete();
            $table->foreignId('motherboard_id')->constraint('motherboards')->cascadeOnDelete();
            $table->foreignId('ram_id')->constraint('rams')->cascadeOnDelete();
            $table->foreignId('gpu_id')->constraint('gpus')->cascadeOnDelete();
            $table->foreignId('psu_id')->constraint('psus')->cascadeOnDelete();
            $table->foreignId('cooling_id')->constraint('coolings')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
};
