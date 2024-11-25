<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWitdhraw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('witdhraw', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('bank');
            $table->string('no_rekening');
            $table->string('name');
            $table->double('total');
            $table->enum('status', ['approve', 'pendding', 'denied'])->default('pendding');
            $table->string('patch')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->after('id', function ($table) {
                $table->double('saldo')->default(0);
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('witdhraw');
    }
}
