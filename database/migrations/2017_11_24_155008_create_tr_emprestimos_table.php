<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tr_emprestimos', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->timestamps();
        // });

        DB::unprepared('
            CREATE TRIGGER tr_relatorio_emprestimo AFTER INSERT ON `emprestimos` FOR EACH ROW
            INSERT INTO relatorio_emprestimos (`cliente`, `valor`,`data_devolucao`) VALUES (\'Cliente\',NEW.valor, NEW.data_devolucao);
            ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tr_emprestimos');
        DB::unprepared('DROP TRIGGER `tr_relatorio_emprestimo`');
    }
}
