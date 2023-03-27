<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            // $table->unsignedBigInteger("cart_id");
            $table->enum('status', ['pendding', 'inProgress', 'shipped', 'inDelivery', 'canceled' , 'success'])->default('pendding');
            $table->enum('payment_method', ['cash', 'visa', 'installment'])->default('cash');

            //array of product IDs
            $table->string("product_ids")->nullable();

            $table->unsignedInteger('total_price');
            $table->unsignedInteger('amount');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('cart_id')->references('id')->on('carts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}
?>
