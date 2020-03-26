<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PivotUpdateMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('debts', function (Blueprint $table) {
            $table->dropForeign('debts_victim_id_foreign');
            $table->dropForeign('debts_debtor_id_foreign');
            $table->dropColumn('victim_id');
            $table->dropColumn('debtor_id');
        });

        Schema::create('debt_user', function (Blueprint $table) {
            $table->unsignedBigInteger('debt_id');
            $table->unsignedbigInteger('user_id');
            $table->foreign('debt_id')->references('id')->on('debts');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
