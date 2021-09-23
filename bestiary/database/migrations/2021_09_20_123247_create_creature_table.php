<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creature', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
           // $table->string('type')->nullable();
          //  $table->string('country')->nullable();
           // $table->string('environment')->nullable();
            $table->timestamps();
            /**$table->string('tags')
             * $table->string('category)
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creature');
    }
}
