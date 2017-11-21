<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $fillable = [
		'nome', 'endereco', 'bi', 'data', 'telefone', 'estado'
	];
}
