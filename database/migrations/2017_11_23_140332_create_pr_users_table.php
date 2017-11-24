<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::unprepared('
            CREATE PROCEDURE pr_users(IN u_id INT)
            BEGIN

            SELECT * FROM users where id=u_id order by id desc;
            END'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('table');
        DB::unprepared('DROP  PROCEDURE `pr_users`');
    }
}
