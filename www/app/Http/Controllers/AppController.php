<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AppController extends Controller
{
    /**
     * Affiche la page welcome
     *
     * @param Request $request
     */
    /**
     * @OA\Get(
     *      summary="Page welcome",
     *      description="Affiche la page d'accueil",
     *      path="/",
     *      tags={"welcome"},
     *      @OA\Response(
     *          response="200",
     *          description="Page affichée",
     *          @OA\JsonContent(
     *              @OA\Property(property="OK", type="integer", description="0=ko, 1=ok")
     *          )
     *      ),
     *  )
     */
    public function index(Request $request): View
    {
        return view('app');
    }
}
