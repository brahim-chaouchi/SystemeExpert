@extends("template", Array(
	"active" => "Dashboard",
	"dot" => "Dashboard v1",
	"title" => "Deviner",
	"subtitle" => "Aide à la résolution de problème",
	"breadcrumb" => Array(
		"Deviner")))
@section("content")

          <!-- Default box -->
          <div class="box">
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Texte">Question</label>
                      <input type="text" class="form-control" id="Texte" placeholder="Texte" value="{{$question->Libelle}}" readonly>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    @foreach($question->hasMany(\App\ReponseModel::class, '_Question')->get() as $reponse)
                      <button type="submit" class="btn btn-primary" name="reponse" value="{{$reponse->id}}">{{$reponse->belongsTo(\App\PossibiliteModel::class, '_Possibilite')->first()->Texte}}</button>
                    @endforeach
                  </div>
                  {{csrf_field()}}
                </form>
          </div><!-- /.box -->
@endsection
