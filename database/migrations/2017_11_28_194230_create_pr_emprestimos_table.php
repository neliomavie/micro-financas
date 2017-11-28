<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('pr_emprestimos', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->timestamps();
        // });

        DB::unprepared('
            CREATE PROCEDURE pr_emprestimos(IN u_id INT)
            BEGIN

            SELECT * FROM emprestimos where usuario_id=u_id;
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
        // Schema::dropIfExists('pr_emprestimos');
        DB::unprepared('DROP  PROCEDURE `pr_emprestimos`');
    }
}
