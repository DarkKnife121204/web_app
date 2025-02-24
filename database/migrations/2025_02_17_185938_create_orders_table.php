<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('g_number');
            $table->date('date');
            $table->date('last_change_date');
            $table->string('supplier_article');
            $table->string('tech_size');
            $table->integer('barcode');
            $table->string('total_price');
            $table->integer('discount_percent')->nullable();
            $table->string('warehouse_name');
            $table->string('oblast')->nullable();
            $table->integer('income_id');
            $table->string('odid');
            $table->integer('nm_id');
            $table->string('subject');
            $table->string('category');
            $table->string('brand');
            $table->boolean('is_cancel')->nullable();
            $table->string('cancel_dt')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
