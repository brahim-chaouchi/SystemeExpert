<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProblemeModel;
use App\ReponseModel;

class ResultatController extends Controller
{
	function new1()
	{
		return view('Resultat/new', [
            "problemeIterator" => ProblemeModel::get(),
		    "reponseIterator" => ReponseModel::get()
        ]);
	}
	function new2(Request $argRequest)
	{
        $resultatEntity = new \App\ResultatModel();
        $resultatEntity->_Probleme = $argRequest->_Probleme;
        $resultatEntity->_Reponse = $argRequest->_Reponse;
        $resultatEntity->save();
		return redirect()->route("resultat.list");
	}
	function list1()
	{
		$resultatIterator = \App\ResultatModel::all();
		return view('Resultat/list', compact("resultatIterator"));
	}
	function view($argId)
	{
		$resultatEntity = \App\ResultatModel::find($argId);
		return view('Resultat/view', compact("resultatEntity"));
	}
	function edit1($argId)
	{
		$resultatEntity = \App\ResultatModel::find($argId);
		return view('Resultat/edit', [
		    "resultatEntity" => $resultatEntity,
            "problemeIterator" => ProblemeModel::get(),
		    "reponseIterator" => ReponseModel::get()
        ]);
	}
	function edit2(Request $argRequest)
	{
		$resultatEntity = \App\ResultatModel::find($argRequest->id);
        $resultatEntity->_Probleme = $argRequest->_Probleme;
        $resultatEntity->_Reponse = $argRequest->_Reponse;
        $resultatEntity->save();
		return redirect()->route("resultat.view", Array("id" => $argRequest->id));
	}
	function delete($argId)
	{
        $resultatEntity = \App\ResultatModel::find($argId);
        $resultatEntity->delete();
		return redirect()->route("resultat.list");
	}
}
