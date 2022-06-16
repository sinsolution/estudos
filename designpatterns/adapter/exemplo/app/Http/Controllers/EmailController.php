<?php

namespace App\Http\Controllers;

use App\Adapters\EmailValidatorAdapter;
use Illuminate\Http\Request;


class EmailController extends Controller
{
    public function emailValidator(Request $request, EmailValidatorAdapter $validator) : String
    {

        if(!$validator->isEmail($request->input('email'))){

            return "O E-mail é inválido";
        }

        return 'O E-mail é válido';
    }
}