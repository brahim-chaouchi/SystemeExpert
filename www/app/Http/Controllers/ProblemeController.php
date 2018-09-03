<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProblemeController extends Controller
{
	function new1()
	{
		return view('Probleme/new');
	}
	function new2(Request $argRequest)
	{
        $problemeEntity = new \App\ProblemeModel();
        $problemeEntity->Intitule = $argRequest->Intitule;
        $problemeEntity->save();
		return redirect()->route("probleme.list");
	}
	function list1()
	{
		$problemeIterator = \App\ProblemeModel::all();
		return view('Probleme/list', compact("problemeIterator"));
	}
	function view($argId)
	{
		$problemeEntity = \App\ProblemeModel::find($argId);
		return view('Probleme/view', compact("problemeEntity"));
	}
	function edit1($argId)
	{
		$problemeEntity = \App\ProblemeModel::find($argId);
		return view('Probleme/edit', compact("problemeEntity"));
	}
	function edit2(Request $argRequest)
	{
		$problemeEntity = \App\ProblemeModel::find($argRequest->id);
        $problemeEntity->Intitule = $argRequest->Intitule;
        $problemeEntity->save();
		return redirect()->route("probleme.view", Array("id" => $argRequest->id));
	}
	function delete($argId)
	{
        $problemeEntity = \App\ProblemeModel::find($argId);
        $problemeEntity->delete();
		return redirect()->route("probleme.list");
	}
}
