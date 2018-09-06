<?php

namespace App\Http\Controllers;

use App\QuestionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DefaultController extends Controller
{
    public function indexGet(){
        Session::forget('reponse');
        //prendre la question qui touche le plus de problemes
        $questionId = DB::select(DB::raw('select Question.id, count(Probleme.id) as nb from Question join Reponse on Reponse._Question=Question.id join Resultat on Resultat._Reponse=Reponse.id join Probleme on Resultat._Probleme=Probleme.id group by Question.id order by nb,id'));
        $question=QuestionModel::find($questionId[0]->id);
        return view('devine', compact('question'));
    }

    public function indexPost(Request $argRequest){
        Session::push('reponse', $argRequest->input('reponse'));
        $reponse=Session::get('reponse');
        //prendre la question qui touche le plus de problemes
        $questionId = DB::select(DB::raw('select Question.id, count(Probleme.id) as nb from Question join Reponse on Reponse._Question=Question.id join Resultat on Resultat._Reponse=Reponse.id join Probleme on Resultat._Probleme=Probleme.id group by Question.id order by nb,id'));
        $question=QuestionModel::find($questionId[0]->id);
        return view('devine', compact('question'));
    }
}
