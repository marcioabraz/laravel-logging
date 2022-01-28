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
    public function sub(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $text = "['num1' => $num1, 'num2' => $num2, 'sub' => {a subtração dos números}]";
        logger()->debug('Sub feita'.$text);
    }
}
