<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('admins')->insert([
            'number' => '1234',
            'password' => bcrypt('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
