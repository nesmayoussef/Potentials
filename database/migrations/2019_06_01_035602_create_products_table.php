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
            $table->bigIncrements('id');
            $table->integer('ParentID')->default(0);
            $table->string('ProductName');
            $table->string('ProductPrice');
            $table->text('ProductDescription');
            $table->tinyInteger('IsActive');
            $table->tinyInteger('ShowInHomePage')->default(0); ;
            $table->tinyInteger('Featuredproduct')->default(0);;
            $table->tinyInteger('OnSale')->default(0);;
            $table->tinyInteger('BestSeller')->default(0); ;
            $table->tinyInteger('OutOfStock')->default(0); ;
            $table->string('LargePhoto')->default(0);
            $table->string('SmallPhoto')->default(0); ;
            $table->integer('CreatedBy')->default(0);
            $table->integer('ModifiedBy')->default(0);
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
