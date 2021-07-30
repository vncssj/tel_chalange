<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {
            $user = new Client();
            $user->nome = $request->nome;
            $user->rg = $request->rg;
            $user->cpf = $request->cpf;
            $user->user_id = 1; //Enquanto não há autenticação com id do user salvo na sessão deixarei 1 mockado
            $user->data_nascimento = $request->data_nascimento;
            $user->local_nascimento = $request->local_nascimento;

            $user->save();
        }

        return view('clients.add');
    }
}
