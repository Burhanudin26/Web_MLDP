<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->string('latitude')->nullable(); // Add 'location' column
            $table->string('longitude')->nullable(); // Add 'location' column
            $table->float('distance')->nullable(); // Add 'location' column
            $table->timestamps();
        });
        Schema::create('attendance_a', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->string('latitude')->nullable(); // Add 'location' column
            $table->string('longitude')->nullable(); // Add 'location' column
            $table->float('distance')->nullable(); // Add 'location' column
            $table->timestamps();
        });
        Schema::create('attendances_m', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->string('latitude')->nullable(); // Add 'location' column
            $table->string('longitude')->nullable(); // Add 'location' column
            $table->float('distance')->nullable(); // Add 'location' column
            $table->timestamps();
        });
        Schema::create('attendances_d', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->string('latitude')->nullable(); // Add 'location' column
            $table->string('longitude')->nullable(); // Add 'location' column
            $table->float('distance')->nullable(); // Add 'location' column
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
        Schema::dropIfExists('attendances');
        Schema::dropIfExists('attendances_a');
        Schema::dropIfExists('attendances_m');
        Schema::dropIfExists('attendances_d');
    }
};
