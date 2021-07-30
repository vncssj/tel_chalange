<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {
            $user = new User();
            $user->name = $request->nome;
            $user->email = $request->email;
            $user->password = Hash::make($request->senha);

            $user->save();
        }

        return view('users.add');
    }

    public function view()
    {
        return view('users.view');
    }
}
