database/migrations/2021_12_11_131423_create_japan_postcodes_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJapanPostcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('japan_postcodes', function (Blueprint $table) {
            $table->string('postcode');
            $table->string('prefecture');
            $table->string('city');
            $table->string('street');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('japan_postcodes');
    }
}