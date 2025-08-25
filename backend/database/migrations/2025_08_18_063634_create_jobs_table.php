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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('block_id');
            $table->foreignId('project_id');
            $table->unsignedBigInteger('floor');
            $table->foreignId('room_id');
            $table->foreignId('task_id');
            $table->string('executor');
//            $table->unsignedBigInteger('work_type_id');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
