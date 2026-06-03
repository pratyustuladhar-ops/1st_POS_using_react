<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->string('barcode', 50)->unique();
            $table->decimal('price', 10, 2);
            $table->integer('stock_quantity')->default(0);

            $table->foreignId('supplier_id')
                  ->constrained('suppliers', 'supplier_id');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};