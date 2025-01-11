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
            $table->unsignedBigInteger('customer_id');
            $table->decimal('amount', 10, 2);
            $table->text('shipping_address');
            $table->text('order_address');
            $table->string('order_email');
            $table->dateTime('order_date');
            $table->string('order_status');
            $table->timestamps();
        
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
