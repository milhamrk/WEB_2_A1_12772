<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IlhamRizkiMigration12772 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id_employee'); //membuat kolom nim auto increment
            $table->string('name'); //membuat kolom nama
            $table->string('username',20); //membuat kolom username
            $table->string('password'); //membuat kolom pass
			$table->string('companyEmail'); //membuat kolom email
            $table->timestamps(); //membuat kolom created_at dan updated_at sebagai fungsi dasar laravel
			$table->unique('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('employee');
    }
}
