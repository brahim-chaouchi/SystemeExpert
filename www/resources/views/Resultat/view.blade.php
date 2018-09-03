@extends("template", Array(
	"active" => "Resultat",
	"dot" => "View",
	"title" => "Resultat",
	"subtitle" => "View",
	"breadcrumb" => Array(
		"Resultat",
		"View")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">View resultat #{{$resultatEntity->id}}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                    {{$resultatEntity->belongsTo(\App\ProblemeModel::class, '_Probleme')->first()->Intitule}}
                  </div>
                  <div>
                    {{$resultatEntity->belongsTo(\App\ReponseModel::class, '_Reponse')->first()->belongsTo(\App\QuestionModel::class, '_Question')->first()->Libelle}}
                  </div>
                  <div>
                    {{$resultatEntity->belongsTo(\App\ReponseModel::class, '_Reponse')->first()->belongsTo(\App\PossibiliteModel::class, '_Possibilite')->first()->Texte}}
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo route("resultat.edit1", Array("id" => $resultatEntity->id), false); ?>">Edit</a>
                  <a href="<?php echo route("resultat.delete", Array("id" => $resultatEntity->id), false); ?>">Delete</a>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
