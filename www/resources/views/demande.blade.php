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
                      1. <label for="Texte">Moi je pense a :</label>
                      <input type="text" class="form-control" id="Texte" placeholder="Texte" value="{{$probleme->Intitule}}" readonly>
                    </div>
                    <div class="form-group">
                      2. <label for="Texte">A quoi tu pense ?</label>
                      <input type="text" class="form-control" id="Texte" placeholder="Texte" name="probleme">
                    </div>
                    <div class="form-group">
                      <label for="Texte">Pose une question a choix multiple qui puisse différencier 1. et 2. ?</label>
                      <input type="text" class="form-control" id="Texte" placeholder="Texte" name="question">
                    </div>
                    <div class="form-group">
                      <label for="Texte">Reponse pour 1.</label>
                      <input type="text" class="form-control" id="Texte" placeholder="Texte" name="reponse1">
                    </div>
                    <div class="form-group">
                      <label for="Texte">Reponse pour 2.</label>
                      <input type="text" class="form-control" id="Texte" placeholder="Texte" name="reponse2">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" class="btn btn-primary" name="ok" value="ok">Valider</button>
                  </div>
                  {{csrf_field()}}
                </form>
          </div><!-- /.box -->
@endsection
