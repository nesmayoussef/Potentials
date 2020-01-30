<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('SiteName');
            $table->string('SiteAddress');
            $table->string('SitePhone');
            $table->string('SiteEmail');
            $table->integer('LangID') ;
            $table->integer('CountryID') ;
            $table->integer('CurrencyID') ;
            $table->tinyInteger('IsActive') ;
            $table->string('AdminName');
            $table->string('AdminEmail');
            $table->string('LogoName')->nullable() ;
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
        Schema::dropIfExists('settings');
    }
}
