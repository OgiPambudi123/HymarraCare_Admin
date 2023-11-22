<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('health_records', function (Blueprint $table) {
            $table->id();
            $table->date('tgl');
            $table->integer('id_user');
            $table->string('penyakit');
            $table->string('skincare');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('health_records');
    }

};
