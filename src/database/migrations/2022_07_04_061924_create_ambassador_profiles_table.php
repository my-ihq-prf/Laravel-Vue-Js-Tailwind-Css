<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbassadorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambassador_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('photo');
            $table->integer('star');
            $table->boolean('active');
            $table->string('activeText');
            $table->string('sport');
            $table->string('loc');
            $table->string('url');
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
        Schema::dropIfExists('ambassador_profiles');
    }
}
