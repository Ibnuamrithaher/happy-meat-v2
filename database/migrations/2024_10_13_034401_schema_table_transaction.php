<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SchemaTableTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('transactions', function (Blueprint $table) {
            $table->after('transaction_total', function ($table) {
                $table->double('ongkir')->default(0);
                $table->bigInteger('vendor_id')->default(0);
            });
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->after('transaction_total', function ($table) {
                $table->string('order_id')->nullable();
                $table->string('bank')->nullable();
                $table->string('va')->nullable();
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
        // Schema::table('transactions', function (Blueprint $table) {
        //     $table->after('transaction_total', function ($table) {});
        // });
        // Schema::table('transactions', function (Blueprint $table) {
        //     $table->after('transaction_total', function ($table) {
        //         $table->bigInteger('vendor_id')->default(0);
        //     });
        // });
        // Schema::table('meat_packages', function (Blueprint $table) {
        //     $table->after('id', function ($table) {
        //         $table->string('patch')->nullable();
        //     });
        // });
    }
}
