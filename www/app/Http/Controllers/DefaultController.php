<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DefaultController extends Controller
{
    public function index(){
        //prendre la question qui touche le plus de problemes
        $question = DB::select(DB::raw('select Question.id, count(Probleme.id) as nb from Question join Reponse on Reponse._Question=Question.id join Resultat on Resultat._Reponse=Reponse.id join Probleme on Resultat._Probleme=Probleme.id group by Question.id order by nb,id'));
        return view('devine', ['id'=>$question[0]->id]);
    }
}
