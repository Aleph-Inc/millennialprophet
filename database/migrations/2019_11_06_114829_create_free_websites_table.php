<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_websites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('middle');
            $table->string('join');
            $table->string('create');
            $table->string('launch');
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
        Schema::dropIfExists('free_websites');
    }
}
