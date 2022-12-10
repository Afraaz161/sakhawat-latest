<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->string('gd_no')->nullable();
            $table->string('walking_customer')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->date('current_date')->nullable();
            $table->string('payment_method', 20);
            $table->string('type', 20);
            $table->string('total_bill')->nullable();
            $table->string('previous_due', 20)->nullable();
            $table->string('receivable', 20)->nullable();
            $table->string('discount_type', 30)->nullable();
            $table->string('discount', 30)->nullable();
            $table->string('charity')->nullable();
            $table->string('sales_tax')->nullable();
            $table->string('sales_tax_price', 30)->nullable();
            $table->string('received', 20)->nullable();
            $table->string('remaining', 20)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('sales');
    }
}
