<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionModel;
use App\PossibiliteModel;

class ReponseController extends Controller
{
	function new1()
	{
		return view('Reponse/new', [
            "questionIterator" => QuestionModel::get(),
		    "possibiliteIterator" => PossibiliteModel::get()
        ]);
	}
	function new2(Request $argRequest)
	{
        $reponseEntity = new \App\ReponseModel();
        $reponseEntity->_Question = $argRequest->_Question;
        $reponseEntity->_Possibilite = $argRequest->_Possibilite;
        $reponseEntity->save();
		return redirect()->route("reponse.list");
	}
	function list1()
	{
		$reponseIterator = \App\ReponseModel::all();
		return view('Reponse/list', compact("reponseIterator"));
	}
	function view($argId)
	{
		$reponseEntity = \App\ReponseModel::find($argId);
		return view('Reponse/view', compact("reponseEntity"));
	}
	function edit1($argId)
	{
		$reponseEntity = \App\ReponseModel::find($argId);
		return view('Reponse/edit', [
		    "reponseEntity" => $reponseEntity,
            "questionIterator" => QuestionModel::get(),
		    "possibiliteIterator" => PossibiliteModel::get()
        ]);
	}
	function edit2(Request $argRequest)
	{
		$reponseEntity = \App\ReponseModel::find($argRequest->id);
        $reponseEntity->_Question = $argRequest->_Question;
        $reponseEntity->_Possibilite = $argRequest->_Possibilite;
        $reponseEntity->save();
		return redirect()->route("reponse.view", Array("id" => $argRequest->id));
	}
	function delete($argId)
	{
        $reponseEntity = \App\ReponseModel::find($argId);
        $reponseEntity->delete();
		return redirect()->route("reponse.list");
	}
}
