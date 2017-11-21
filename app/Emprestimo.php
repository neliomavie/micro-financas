<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
	protected $fillable = [
		'descricao', 'valor', 'modalidade', 'estado', 'id_cliente', 'id_usuario'
	];
}
