@extends("template", Array(
	"active" => "Resultat",
	"dot" => "Edit",
	"title" => "Resultat",
	"subtitle" => "Edit",
	"breadcrumb" => Array(
		"Resultat",
		"Edit")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit resultat #{{$resultatEntity->id}}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route("resultat.edit2", Array(), false)}}">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Probleme</label>
                      <select class="form-control" name="_Probleme">
                        @foreach($problemeIterator as $problemeEntity)
                          @if($problemeEntity->id==$resultatEntity->_Probleme)
                            <option value="{{$problemeEntity->id}}" selected>{{$problemeEntity->Intitule}}</option>
                          @else
                            <option value="{{$problemeEntity->id}}">{{$problemeEntity->Intitule}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Reponse</label>
                      <select class="form-control" name="_Reponse">
                        @foreach($reponseIterator as $reponseEntity)
                          @if($reponseEntity->id==$resultatEntity->_Reponse)
                            <option value="{{$reponseEntity->id}}" selected>{{$reponseEntity->belongsTo(\App\QuestionModel::class, '_Question')->first()->Libelle}} -> {{$reponseEntity->belongsTo(\App\PossibiliteModel::class, '_Possibilite')->first()->Texte}}</option>
                          @else
                            <option value="{{$reponseEntity->id}}">{{$reponseEntity->belongsTo(\App\QuestionModel::class, '_Question')->first()->Libelle}} -> {{$reponseEntity->belongsTo(\App\PossibiliteModel::class, '_Possibilite')->first()->Texte}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$resultatEntity->id}}">
                </form>
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
