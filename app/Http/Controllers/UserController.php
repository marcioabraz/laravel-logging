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
        $sub = $num1 - $num2;
        logger()->debug('Sub feita', ['num1' => $num1, 'num2' => $num2, 'sub' => $sub]);
        return $sub;
    }
    public function div(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        if ($num2==0){
            logger()->Error('Divisor zero!');
            return false;
        }
        logger()->info('Div feita');
        return $num1 / $num2;

    }
    public function mult(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        if ($num2<0 || $num1<0 ){
            logger()->WARNING('Negativo');
        }
        return $num1 * $num2;

    }
}
