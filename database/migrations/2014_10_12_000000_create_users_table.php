<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('IsAdmin')->default(0);
            $table->boolean('IsSupervisor')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => 'Temidayo Onifade',
            'email' => 'dayo@admin.com',
            'password' => bcrypt('secret'),
            'IsAdmin' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Olaotan Junior',
            'email' => 'ola.junior@admin.com',
            'password' => bcrypt('secret'),
            'IsSupervisor' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
