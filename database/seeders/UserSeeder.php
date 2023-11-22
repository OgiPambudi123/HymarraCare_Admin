<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user ->name = "Admin";
        $user ->email = "admin@gmail.com";
        $user ->password = bcrypt("admin1234");
        $user ->phone = "081297998903";
        $user ->alamat = "Yogyakarta";
        $user ->role = "admin";
        $user ->save();
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}