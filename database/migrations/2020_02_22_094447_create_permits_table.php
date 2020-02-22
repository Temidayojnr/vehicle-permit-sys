<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('user_id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Picture')->default('default.jpg');
            $table->date('DOB');
            $table->string('Sex')->nullable();
            $table->date('Date');
            $table->string('State')->nullable();
            $table->string('Occupation')->nullable();
            $table->string('Address');
            $table->string('Email');
            $table->boolean('Stage1')->default(0);
            $table->string('ApplicationType')->nullable();
            $table->string('TestScore')->nullable();
            $table->string('Location')->nullable();
            $table->string('PermitType')->nullable();
            $table->boolean('Stage2')->default(0);
            $table->boolean('Stage3')->default(0);
            $table->boolean('RejectAdmin')->default(0);
            $table->boolean('RejectSupervisor')->default(0);
            $table->string('AdminComment')->nullable();
            $table->string('SupervisorComment')->nullable();
            $table->integer('Initiator');
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
        Schema::dropIfExists('permits');
    }
}
