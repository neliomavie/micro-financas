<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bem extends Model
{
	protected $fillable = [
		'nome', 'descricao', 'cliente_id'
	];
}
