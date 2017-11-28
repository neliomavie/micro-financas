<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emprestimo;
use App\Cliente;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        $clientes = Cliente::all();
        $emprestimos = Emprestimo::all();

        $user_id= Auth()->user()->id;
        $pr_emprestimos=DB::select("call pr_emprestimos($user_id)");

        return view('home', compact('usuarios','clientes', 'emprestimos', 'pr_emprestimos'));
    }


    public function relatorio()
    {
        $user_id= Auth()->user()->id;
        $pr_emprestimos=DB::select("call pr_emprestimos($user_id)");

        return view('home', compact('pr_emprestimos'));
    }
}
