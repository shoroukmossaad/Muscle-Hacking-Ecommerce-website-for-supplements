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
            $table->string('username',20);
            $table->string('email')->unique();
            $table->string('password');
            $table->String('phone',11);
            // $table->smallInteger('phone',)->required();

            $table->enum('role', ['user', 'admin'])->default('user');
            $table->enum('gender',['female','male','perfernotsay'])->default('perfernotsay');
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
    }
};
