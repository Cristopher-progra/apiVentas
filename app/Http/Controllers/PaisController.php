<?php

namespace App\Http\Controllers;
use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function select()
    {
        try {
            $paises = Pais::all();
            
            if ($paises->count() > 0) {
                return response()->json([
                    'code' => 200,
                    'data' => $paises
                ], 200);
            } else {
                return response()->json([
                    'code' => 404,
                    'data' => 'No hay países'
                ], 404);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 500,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}

