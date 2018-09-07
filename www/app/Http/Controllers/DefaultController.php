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
            return view('trouve', compact('probleme'));
        }
        if($questionId==0){
            return view('seche');
        }
        $question=QuestionModel::find($questionId);
        return view('devine', compact('question'));
    }
}
