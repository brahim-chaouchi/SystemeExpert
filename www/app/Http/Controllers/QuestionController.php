<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
	function new1()
	{
		return view('Question/new');
	}
	function new2(Request $argRequest)
	{
        $questionEntity = new \App\QuestionModel();
        $questionEntity->Libelle = $argRequest->Libelle;
        $questionEntity->save();
		return redirect()->route("question.list");
	}
	function list1()
	{
		$questionIterator = \App\QuestionModel::all();
		return view('Question/list', compact("questionIterator"));
	}
	function view($argId)
	{
		$questionEntity = \App\QuestionModel::find($argId);
		return view('Question/view', compact("questionEntity"));
	}
	function edit1($argId)
	{
		$questionEntity = \App\QuestionModel::find($argId);
		return view('Question/edit', compact("questionEntity"));
	}
	function edit2(Request $argRequest)
	{
		$questionEntity = \App\QuestionModel::find($argRequest->id);
        $questionEntity->Libelle = $argRequest->Libelle;
        $questionEntity->save();
		return redirect()->route("question.view", Array("id" => $argRequest->id));
	}
	function delete($argId)
	{
        $questionEntity = \App\QuestionModel::find($argId);
        $questionEntity->delete();
		return redirect()->route("question.list");
	}
}
