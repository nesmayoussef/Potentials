<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ParentID')->default(0);
            $table->string('PageName');
            $table->string('PageTitle');
            $table->text('PageContent');
            $table->integer('PageOrder') ;
            $table->tinyInteger('IsActive') ;
            $table->tinyInteger('IsHomePage');
            $table->tinyInteger('ShowInHomePage');
            $table->tinyInteger('InMenu') ;
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
        Schema::dropIfExists('pages');
    }
}
