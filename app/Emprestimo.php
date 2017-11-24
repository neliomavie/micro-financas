<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
	protected $fillable = [
		'descricao', 'valor', 'modalidade', 'estado', 'cliente', 'usuario_id', 'data_emprestimo', 'data_devolucao'
	];
}
