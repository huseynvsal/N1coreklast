<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
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
            $table->text('name');
            $table->text('ingredient')->nullable();
            $table->text('weight')->nullable();
            $table->text('protein')->nullable();
            $table->text('fat')->nullable();
            $table->text('energy')->nullable();
            $table->text('value')->nullable();
            $table->text('life')->nullable();
            $table->text('condition')->nullable();
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
            $table->text('image4');
            $table->text('price');
            $table->text('category');
            $table->text('content')->nullable();
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
        Schema::dropIfExists('products');
    }
}
