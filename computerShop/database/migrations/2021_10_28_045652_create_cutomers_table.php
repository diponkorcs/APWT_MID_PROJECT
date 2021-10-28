<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutomers', function (Blueprint $table) {
            $table->bigIncrements('c_id');
            $table->string('cName',100);
            $table->string('pass',100);
            $table->string('pNumber',20);
            $table->string('email',100);
            $table->string('address',200);
            $table->string('dob',50);
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
        Schema::dropIfExists('cutomers');
    }
}
