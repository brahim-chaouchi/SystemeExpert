@extends("template", Array(
	"active" => "Reponse",
	"dot" => "View",
	"title" => "Reponse",
	"subtitle" => "View",
	"breadcrumb" => Array(
		"Reponse",
		"View")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">View reponse #{{$reponseEntity->id}}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                    {{$reponseEntity->belongsTo(\App\QuestionModel::class, '_Question')->first()->Libelle}}
                  </div>
                  <div>
                    {{$reponseEntity->belongsTo(\App\PossibiliteModel::class, '_Possibilite')->first()->Texte}}
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo route("reponse.edit1", Array("id" => $reponseEntity->id), false); ?>">Edit</a>
                  <a href="<?php echo route("reponse.delete", Array("id" => $reponseEntity->id), false); ?>">Delete</a>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
