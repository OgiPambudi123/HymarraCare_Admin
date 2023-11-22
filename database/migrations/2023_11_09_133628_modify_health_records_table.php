<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyHealthRecordsTable extends Migration
{
    public function up()
    {
        Schema::table('health_records', function (Blueprint $table) {
            $table->text('skincare')->change();
        });
    }

    public function down()
    {
        Schema::table('health_records', function (Blueprint $table) {
            $table->string('skincare')->change();
        });
    }
};
