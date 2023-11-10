<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovels', function (Blueprint $table) {
            $table->id();
            $table->string('modelo')->default('');
            $table->string('fabricante')->default('');
            $table->integer('ano')->default('1');
            $table->double('quilometragem')->default('1.1');
            $table->unsignedBigInteger(('user_id'));
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
        Schema::dropIfExists('automovel');
    }
};
