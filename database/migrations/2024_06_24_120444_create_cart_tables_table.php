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
        Schema::create('cart_tables', function (Blueprint $table) {
            $table->id('CartID');
            $table->String('CartUserID');
            $table->String('CartProductID');
            $table->string('CartUserNotes');
            $tab;e->integer('CartItemAmount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_tables');
    }
};
