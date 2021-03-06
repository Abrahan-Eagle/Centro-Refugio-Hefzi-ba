<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->string('name',128);
            $table->string('slug', 128)->unique();
            $table->text('content')->nullable();
            $table->string('img')->nullable();
            $table->enum('statusx', ['PUBLISHED', 'DRAFT' ])->default('PUBLISHED');
            
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
        Schema::dropIfExists('sponsor');
    }
}
