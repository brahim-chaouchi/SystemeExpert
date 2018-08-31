@extends("template", Array(
	"active" => "Reponse",
	"dot" => "New",
	"title" => "Reponse",
	"subtitle" => "New",
	"breadcrumb" => Array(
		"Reponse",
		"New")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add a reponse</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Question</label>
                      <select class="form-control" name="_Question">
                        @foreach($questionIterator as $questionEntity)
                          <option value="{{$questionEntity->id}}">{{$questionEntity->Libelle}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Possibilite</label>
                      <select class="form-control" name="_Possibilite">
                        @foreach($possibiliteIterator as $possibiliteEntity)
                          <option value="{{$possibiliteEntity->id}}">{{$possibiliteEntity->Texte}}</option>
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
