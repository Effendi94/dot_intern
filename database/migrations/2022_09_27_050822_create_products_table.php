<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->string('unit');
            $table->string('category');
            $table->decimal('price');
            $table->unsignedTinyInteger('stok');
            $table->unsignedBigInteger('discount_id');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();

            $table->foreign('discount_id')->references('id')->on('discount');
            $table->foreign('updated_by')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
