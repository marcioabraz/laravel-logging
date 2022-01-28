<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    //public function somar(Request $request)
    public function somar($num1, $num2)
    {
        $result = $num1+$num2;
        logger()->info('Soma feita'.$result);
    }
}
