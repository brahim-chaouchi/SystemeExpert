<?php

namespace App\Http\Controllers;

use App\ProblemeModel;
use App\QuestionModel;
use App\ResultatModel;
use App\ReponseModel;
use App\PossibiliteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DefaultController extends Controller
{
    public function indexGet(){
        Session::forget('reponse');
        $resultatArray=[];
        $problemeArray=[];
        $questionArray=[];
         /** @var ResultatModel $resultatEntity */
        $resultatIterator=(new ResultatModel())->get();
        foreach($resultatIterator as $resultatEntity){
            $problemeEntity=$resultatEntity->belongsTo(ProblemeModel::class, '_Probleme')->first();
            $reponseEntity=$resultatEntity->belongsTo(ReponseModel::class, '_Reponse')->first();
            $questionEntity=$reponseEntity->belongsTo(QuestionModel::class, '_Question')->first();
            $possibiliteEntity=$reponseEntity->belongsTo(PossibiliteModel::class, '_Possibilite')->first();
            $resultatArray[$problemeEntity->id][$questionEntity->id]=$possibiliteEntity->id;
            $problemeArray[$problemeEntity->id]=(isset($problemeArray[$problemeEntity->id])?$problemeArray[$problemeEntity->id]:0)+1;
            $questionArray[$questionEntity->id]=(isset($questionArray[$questionEntity->id])?$questionArray[$questionEntity->id]:0)+1;
        }
        $questionId=0;
        foreach($questionArray as $cle=>$valeur){
            if($valeur>=2){
                $questionId=$cle;
                break;
            }
        }
        $question=QuestionModel::find($questionId);
        return view('devine', compact('question'));
    }

    public function indexPost(Request $argRequest){
        Session::push('reponse', $argRequest->input('reponse'));
        $reponse=Session::get('reponse');
        $resultatArray=[];
        $problemeArray=[];
        $questionArray=[];
        //remplit le tableau des resultats
        /** @var ResultatModel $resultatEntity */
        $resultatIterator=(new ResultatModel())->get();
        foreach($resultatIterator as $resultatEntity){
            $problemeEntity=$resultatEntity->belongsTo(ProblemeModel::class, '_Probleme')->first();
            $reponseEntity=$resultatEntity->belongsTo(ReponseModel::class, '_Reponse')->first();
            $questionEntity=$reponseEntity->belongsTo(QuestionModel::class, '_Question')->first();
            $possibiliteEntity=$reponseEntity->belongsTo(PossibiliteModel::class, '_Possibilite')->first();
            $resultatArray[$problemeEntity->id][$questionEntity->id]=$possibiliteEntity->id;
            $problemeArray[$problemeEntity->id]=(isset($problemeArray[$problemeEntity->id])?$problemeArray[$problemeEntity->id]:0)+1;
            $questionArray[$questionEntity->id]=(isset($questionArray[$questionEntity->id])?$questionArray[$questionEntity->id]:0)+1;
        }
        //pour chaque reponse donnee, on garde les solutions compatibles
        foreach($reponse as $reponseId){
            $reponseEntity=(new ReponseModel)->find($reponseId);
            $questionEntity=$reponseEntity->belongsTo(QuestionModel::class, '_Question')->first();
            $possibiliteEntity=$reponseEntity->belongsTo(PossibiliteModel::class, '_Possibilite')->first();
            $problemeIterator=(new ProblemeModel())->get();
            foreach($problemeIterator as $problemeEntity){
                if(isset($resultatArray[$problemeEntity->id][$questionEntity->id]) && $resultatArray[$problemeEntity->id][$questionEntity->id]!=$possibiliteEntity->id){
                    $problemeArray[$problemeEntity->id]=0;
                }
            }
            $questionArray[$questionEntity->id]=0;
        }
        //on recalcule la pertinence de chaque question
        foreach($questionArray as $questionCle=>$questionValeur){
            if($questionValeur!=0){
                $questionArray[$questionCle]=0;
                foreach($problemeArray as $problemeCle=>$problemeValeur){
                    if($problemeValeur!=0 && isset($resultatArray[$problemeCle][$questionCle])){
                        $questionArray[$questionCle]++;
                    }
                }
            }
        }
        //on prend la premiere question qui touche au moins 2 problemes
        $questionId=0;
        foreach($questionArray as $cle=>$valeur){
            if($valeur>=2){
                $questionId=$cle;
                break;
            }
        }
        $problemeNb=0;
        $problemeId=0;
        foreach($problemeArray as $cle=>$valeur){
            if($valeur!=0){
                $problemeNb++;
                $problemeId=$cle;
            }
        }
        if($problemeNb==0){
            return view('pastrouve');
        }
        if($problemeNb==1){
            $probleme=ProblemeModel::find($problemeId);
            Session::put('trouve', $problemeId);
            return view('trouve', compact('probleme'));
        }
        if($questionId==0){
            return view('seche');
        }
        $question=QuestionModel::find($questionId);
        return view('devine', compact('question'));
    }

    public function demandeGet(){
        $problemeId=Session::get('trouve');
        $probleme=ProblemeModel::find($problemeId);
        return view('demande', compact('probleme'));
    }

    public function demandePost(Request $argRequest){
        $problemeId=Session::get('trouve');
        $probleme=ProblemeModel::find($problemeId);
        $questionEntity=new QuestionModel();
        $questionEntity->Libelle=$argRequest->input()["question"];
        $questionEntity->save();
        $possibilite1Entity=new PossibiliteModel();
        $possibilite1Entity->Texte=$argRequest->input()["reponse1"];
        $possibilite1Entity->save();
        $possibilite2Entity=new PossibiliteModel();
        $possibilite2Entity->Texte=$argRequest->input()["reponse2"];
        $possibilite2Entity->save();
        $reponse1Entity=new ReponseModel();
        $reponse1Entity->_Question=$questionEntity->id;
        $reponse1Entity->_Possibilite=$possibilite1Entity->id;
        $reponse1Entity->save();
        $reponse2Entity=new ReponseModel();
        $reponse2Entity->_Question=$questionEntity->id;
        $reponse2Entity->_Possibilite=$possibilite2Entity->id;
        $reponse2Entity->save();
        $problemeEntity=new ProblemeModel();
        $problemeEntity->Intitule=$argRequest->input()["probleme"];
        $problemeEntity->save();
        $resultat1Entity=new ResultatModel();
        $resultat1Entity->_Probleme=$problemeId;
        $resultat1Entity->_Reponse=$reponse1Entity->id;
        $resultat1Entity->save();
        $resultat2Entity=new ResultatModel();
        $resultat2Entity->_Probleme=$problemeEntity->id;
        $resultat2Entity->_Reponse=$reponse2Entity->id;
        $resultat2Entity->save();
        $reponse=Session::get('reponse');
        foreach($reponse as $cle=>$valeur){
            $resultatEntity=new ResultatModel();
            $resultatEntity->_Probleme=$problemeEntity->id;
            $resultatEntity->_Reponse=$valeur;
            $resultatEntity->save();
        }
        return view('merci');
    }
}
