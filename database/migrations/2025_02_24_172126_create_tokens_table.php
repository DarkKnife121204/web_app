<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained('accounts');
            $table->foreignId('token_type_id')->constrained('token_types');
            $table->string('token_value');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tokens');
    }
};
