<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
	public function liveSearch(Request $request)
	{ 
		$search = $request->id;

		if (is_null($search))
		{
			return view('ajax.livesearch');		   
		}
		else
		{
			$posts = Cliente::where('nome','LIKE',"%{$search}%")->get();

			return view('ajax.livesearchajax')->withPosts($posts);
		}
	}
	
}
