<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->string('invoice')->nullable();
            $table->string('total')->nullable()->default(0);
            $table->string('received')->nullable()->default(0);
            $table->string('receivable')->nullable()->default(0);
            $table->string('credit')->nullable()->default(0);
            $table->string('debit')->nullable()->default(0);
            $table->string('balance')->nullable()->default(0);
            $table->string('description')->default('Sale Payment');
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
        Schema::dropIfExists('account_sales');
    }
}
