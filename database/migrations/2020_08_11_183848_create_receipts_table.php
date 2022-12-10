<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->string('e_name', 60);
            // $table->string('u_name', 60);
            $table->string('price', 20);
            $table->string('quantity', 10);
            $table->string('total_bill', 20);
            $table->string('total_items', 10);
            $table->string('less_perc', 5)->nullable();
            $table->string('less_net', 10)->nullable();
            $table->string('receivable', 20)->nullable();
            $table->string('previous_due', 20)->nullable();
            $table->string('grand_total_bill', 20)->nullable();
            $table->string('received', 20)->nullable();
            $table->string('change', 20)->nullable();
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
        Schema::dropIfExists('receipts');
    }
}
