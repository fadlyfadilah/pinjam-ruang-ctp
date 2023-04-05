<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitiansTable extends Migration
{
    public function up()
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('email');
            $table->string('univ');
            $table->longText('alamat')->nullable();
            $table->date('lama');
            $table->string('judul');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}