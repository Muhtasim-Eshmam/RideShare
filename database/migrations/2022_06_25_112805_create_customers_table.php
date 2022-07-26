<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nid');
            $table->string('contact');
            $table->string('email');
            $table->string('pickup');
            $table->string('destination');
            $table->string('bookfor');
            $table->string('oname')->nullable();
            $table->string('vreg')->nullable();
            $table->string('cmodel')->nullable();
            $table->string('fee')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('customers');
    }
}
