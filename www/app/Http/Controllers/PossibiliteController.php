<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PossibiliteController extends Controller
{
	function new1()
	{
		return view('Possibilite/new');
	}
	function new2(Request $argRequest)
	{
		$possibiliteEntity = new \App\PossibiliteModel();
        $possibiliteEntity->Texte = $argRequest->Texte;
        $possibiliteEntity->save();
		return redirect()->route("possibilite.list");
	}
	function list1()
	{
		$possibiliteIterator = \App\PossibiliteModel::all();
		return view('Possibilite/list', compact("possibiliteIterator"));
	}
	function view($argId)
	{
        $possibiliteEntity = \App\PossibiliteModel::find($argId);
		return view('Possibilite/view', compact("possibiliteEntity"));
	}
	function edit1($argId)
	{
		$possibiliteEntity = \App\PossibiliteModel::find($argId);
		return view('Possibilite/edit', compact("possibiliteEntity"));
	}
	function edit2(Request $argRequest)
	{
		$possibiliteEntity = \App\PossibiliteModel::find($argRequest->id);
        $possibiliteEntity->Libelle = $argRequest->Libelle;
        $possibiliteEntity->save();
		return redirect()->route("possibilite.view", Array("id" => $argRequest->id));
	}
	function delete($argId)
	{
        $possibiliteEntity = \App\PossibiliteModel::find($argId);
        $possibiliteEntity->delete();
		return redirect()->route("possibilite.list");
	}
}
