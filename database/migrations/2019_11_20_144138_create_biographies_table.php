<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biographies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned(); //FK de users.
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->smallInteger('genre');
            $table->date('birth_date');
            $table->string('address', 100);
            $table->string('city', 50);
            $table->string('studies', 50);
            $table->string('degree', 100);
            $table->string('file_cv', 255);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biographies');
    }
}
