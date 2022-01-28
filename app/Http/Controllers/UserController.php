<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function somar(Request $request)
    {
        $result = $request->num1+$request->num2;
        logger()->info('Soma feita');
        return $result;
    }
}
