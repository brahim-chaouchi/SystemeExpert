@extends("template", Array(
	"active" => "Resultat",
	"dot" => "New",
	"title" => "Resultat",
	"subtitle" => "New",
	"breadcrumb" => Array(
		"Resultat",
		"New")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add a resultat</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Probleme</label>
                      <select class="form-control" name="_Probleme">
                        @foreach($problemeIterator as $problemeEntity)
                          <option value="{{$problemeEntity->id}}">{{$problemeEntity->Intitule}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Reponse</label>
                      <select class="form-control" name="_Reponse">
                        @foreach($reponseIterator as $reponseEntity)
                          <option value="{{$reponseEntity->id}}">{{$reponseEntity->belongsTo(\App\QuestionModel::class, '_Question')->first()->Libelle}} -> {{$reponseEntity->belongsTo(\App\PossibiliteModel::class, '_Possibilite')->first()->Texte}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  {{csrf_field()}}
                </form>
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
