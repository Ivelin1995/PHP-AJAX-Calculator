<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolveController extends Controller
{

    public function solve(Request $request)
    {

        $expression = $request->expression;

        $result = 0;

        eval('$result = ' . $expression . ';');

        return response()->json([
            'result' => $result
        ]);
    }

}
