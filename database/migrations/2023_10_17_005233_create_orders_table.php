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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer'); //имя клиента
            $table->string('phone'); //телефон клиента
            $table->timestamps();
            $table->string('name');
            $table->foreignId('user_id')->constrained('users');
            $table->enum('type', ['online', 'offline'])->default('Выберите тип');
            $table->enum('status', ['active', 'completed', 'canceled'])->default('Выберите статус');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
