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
   Schema::create('purchases', function (Blueprint $table) {
        $table->id('purchase_id');

        $table->foreignId('supplier_id')->constrained('suppliers', 'supplier_id');

        $table->foreignId('user_id')->constrained('users', 'user_id');

        $table->date('purchase_date');
        $table->decimal('total_amount', 10, 2);

        $table->timestamps();

        });
    }

};

