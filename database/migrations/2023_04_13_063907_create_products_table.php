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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('slug')->unique();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->double('discount_price')->nullable();
            $table->double('sale_price')->nullable();
            $table->double('total_quanitity')->nullable();
            $table->integer('view_count')->nullable();
            $table->integer('like_count')->nullable();
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
