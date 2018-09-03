@extends("template", Array(
	"active" => "Probleme",
	"dot" => "Edit",
	"title" => "Probleme",
	"subtitle" => "Edit",
	"breadcrumb" => Array(
		"Probleme",
		"Edit")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit probleme #{{$problemeEntity->id}}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route("probleme.edit2", Array(), false)}}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Intitule">Intitule</label>
                      <input type="text" class="form-control" id="Intitule" placeholder="Intitule" value="{{$problemeEntity->Intitule}}" name="Intitule">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$problemeEntity->id}}">
                </form>
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
