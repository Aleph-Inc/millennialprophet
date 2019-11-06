<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJesusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jesuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('whatjesus');
            $table->string('middle');
            $table->string('hisheal');
            $table->string('title');
            $table->string('page_creation_date');
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
        Schema::dropIfExists('jesuses');
    }
}
