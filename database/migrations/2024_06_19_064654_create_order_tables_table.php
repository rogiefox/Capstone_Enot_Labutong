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
        Schema::create('order_tables', function (Blueprint $table) {
            $table->id('OrderID');
            $table->string('OrderUserID');
            $table->string('OrderProductID');
            $table->string('Notes');
            $table->string('Address');
            $table->string('PaymentMethod');
            $table->integer('TotalAmount');
            $table->string('OrderStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_tables');
    }
};
