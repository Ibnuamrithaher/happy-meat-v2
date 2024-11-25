<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUserIdTableMeatPackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meat_packages', function (Blueprint $table) {
            $table->after('id', function ($table) {
                $table->bigInteger('user_id')->nullable();
                $table->string('status')->default('pendding');
                $table->string('patch')->nullable();
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
        // Schema::table('meat_packages', function (Blueprint $table) {
        //     $table->after('id', function ($table) {
        //         // $table->bigInteger('user_id')->nullable();

        //     });
        // });
    }
}
