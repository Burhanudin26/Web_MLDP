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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('NI')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_photo')->nullable(); // Added column for profile photo
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('Mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('NIM')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_photo')->nullable(); // Added column for profile photo
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('Dosens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('NID')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_photo')->nullable(); // Added column for profile photo
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('Admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('NIA')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_photo')->nullable(); // Added column for profile photo
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('Mahasiswa');
        Schema::dropIfExists('Dosen');
        Schema::dropIfExists('Admin');
    }
};
