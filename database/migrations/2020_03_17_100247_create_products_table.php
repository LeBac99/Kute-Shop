<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->Increments('id');
            $table->integer('cate_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('shop_customer_id')->unsigned()->nullable();
            $table->char('name', 199)->unique();
            $table->json('image');
            $table->string('detail');
            $table->decimal('price', 18, 0);
            $table->decimal('promotion_price', 18, 0);
            $table->integer('rate');
            $table->integer('amount');          
            $table->integer('status');
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('shop_customer_id')->references('id')->on('shop_customers')->onDelete('cascade');
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
