<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function add(Request $request)
    {
        $a = (int) $request->query('a');
        $b = (int) $request->query('b');

        return response()->json([
            'result' => $a + $b
        ]);
    }
}
