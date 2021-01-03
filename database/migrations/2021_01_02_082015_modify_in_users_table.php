<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('sex', 2)->after('name');
            $table->date('birthday')->after('sex');
            $table->string('status', 1)->after('birthday');
            $table->string('account', 10)->after('status');
            $table->string('telephone', 10)->after('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('sex');
            $table->dropColumn('birthday');
            $table->dropColumn('status');
            $table->dropColumn('account');
            $table->dropColumn('telephone');
        });
    }
}
