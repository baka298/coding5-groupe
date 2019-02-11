<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('firstname')->nullable();
            $table->string('gsm')->nullable();
            $table->string('pays')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('image')->nullable();
            $table->date('dateDeNaissance')->nullable();

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::table('profils', function(Blueprint $table) {
            $table->dropForeign('profils_user_id_foreign');
		});
        Schema::dropIfExists('profils');
	}
}
