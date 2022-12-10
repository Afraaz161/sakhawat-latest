<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->date('current_date')->nullable();
            $table->string('payment_method', 20);
            $table->string('purchase_rate')->nullable();
            $table->string('sale_rate')->nullable();
            $table->string('vendor_previous_due', 20)->nullable();
            $table->string('total_bill', 20)->nullable();
            $table->string('payable', 20)->nullable();
            $table->string('payment', 20)->nullable();
            $table->string('sale_man')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
