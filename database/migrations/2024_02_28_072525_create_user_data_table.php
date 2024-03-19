<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('address');
            $table->decimal('electricity', 8, 2);
            $table->decimal('water', 8, 2);
            $table->decimal('gas', 8, 2);
            $table->decimal('amount', 8, 2);
            $table->date('due_date');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_data');
    }
}

