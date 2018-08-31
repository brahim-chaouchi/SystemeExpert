@extends("template", Array(
	"active" => "Reponse",
	"dot" => "Edit",
	"title" => "Reponse",
	"subtitle" => "Edit",
	"breadcrumb" => Array(
		"Reponse",
		"Edit")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit reponse #{{$reponseEntity->id}}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route("reponse.edit2", Array(), false)}}">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Question</label>
                      <select class="form-control" name="_Question">
                        @foreach($questionIterator as $questionEntity)
                          @if($questionEntity->id==$reponseEntity->_Question)
                            <option value="{{$questionEntity->id}}" selected>{{$questionEntity->Libelle}}</option>
                          @else
                            <option value="{{$questionEntity->id}}">{{$questionEntity->Libelle}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Possibilite</label>
                      <select class="form-control" name="_Possibilite">
                        @foreach($possibiliteIterator as $possibiliteEntity)
                          @if($possibiliteEntity->id==$reponseEntity->_Possibilite)
                            <option value="{{$possibiliteEntity->id}}" selected>{{$possibiliteEntity->Texte}}</option>
                          @else
                            <option value="{{$possibiliteEntity->id}}">{{$possibiliteEntity->Texte}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$reponseEntity->id}}">
                </form>
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
