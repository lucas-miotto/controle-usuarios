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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro');
            $table->string('cep');
            $table->timestamps();
        });

        Schema::create('address_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('address_id')->constrained('addresses');
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_user');
        Schema::dropIfExists('addresses');
    }
};
