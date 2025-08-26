<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('cards_id');
            $table->integer('c_user_id');
            $table->integer('c_template_id');
            $table->string( 'c_name');
            $table->string( 'c_company_name');
            $table->string( 'c_designation');
            $table->string( 'c_mobile');
            $table->string( 'c_whatsapp');
            $table->text( 'c_address');
            $table->string( 'c_email');
            $table->string( 'c_website');
            $table->string( 'c_about');
            $table->dateTime('c_added_date')->nullable();
            $table->dateTime('c_updated_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
};
