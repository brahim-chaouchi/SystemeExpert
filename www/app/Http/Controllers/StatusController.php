<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class StatusController extends Controller
{
    /**
     * Status pour indiquer que le serveur fonctionne
     *
     * @return JsonResponse
     */
    public function status(): JsonResponse
    {
        return response()->json(
            [
                "OK" => 1,
            ]
        );
    }
}
