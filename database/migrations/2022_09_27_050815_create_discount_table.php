<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->unsignedTinyInteger('discount_persen');
            $table->decimal('discount_max');
            $table->string('status_code', 2);
            $table->timestamps();

            $table->foreign('status_code')->references('code')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discount');
    }
}
