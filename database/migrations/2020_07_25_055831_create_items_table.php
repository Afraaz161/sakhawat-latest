<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('price')->nullable();
            $table->string('old_price')->nullable();
            $table->string('sale_rate')->nullable();
            $table->string('purchase_rate')->nullable();
            $table->integer('reorder_value')->nullable();
            $table->string('required')->nullable();
            $table->string('image')->nullable();
            $table->integer('stock')->nullable();
            $table->text('description')->nullable();
            $table->text('unit')->nullable();
            $table->text('sku')->nullable();
            $table->text('barcode')->nullable();
            $table->string('status')->default('ok');
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
        Schema::dropIfExists('items');
    }
}
