<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('token_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->foreignId('service_id')->constrained('api_services');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('token_types');
    }
};
