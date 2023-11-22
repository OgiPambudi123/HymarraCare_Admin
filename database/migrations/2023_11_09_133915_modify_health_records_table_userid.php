<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyHealthRecordsTableUserid extends Migration
{
    public function up()
    {
        Schema::table('health_records', function (Blueprint $table) {
            $table->string('id_user', 36)->change();
        });
    }

    public function down()
    {
        Schema::table('health_records', function (Blueprint $table) {
            $table->uuid('id_user')->change();
        });
    }
};
