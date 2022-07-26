<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('oname');
            $table->string('oid');
            $table->string('dname');
            $table->string('did');
            $table->string('dcontact');
            $table->string('ocontact');
            $table->string('dlicense');
            $table->string('vreg');
            $table->string('dlv');
            $table->string('vlv');
            $table->string('cmodel');
            $table->string('cdetails');
            $table->string('fee')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('avat')->nullable();
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
        Schema::dropIfExists('vendors');
    }
}
