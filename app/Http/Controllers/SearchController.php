<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Bem;

class SearchController extends Controller
{
	public function bensSearch(Request $request){
		$q = $request->q;

		if($q != ""){
			$bens = Bem::where ( 'nome', 'LIKE', '%' . $q . '%' )->orWhere ( 'descricao', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
			// $pagination = $bens->appends ( array ( 'q' => Input::get ( 'q' ) ) );
			if (count ( $bens ) > 0)
				return view ( 'bens.index' )->withDetails ( $bens )->withQuery ( $q );
		}
		return view ( 'bens.index' )->withMessage ( 'No Details found. Try to search again !' );
	}

}
