@extends("template", Array(
	"active" => "Possibilite",
	"dot" => "Edit",
	"title" => "Possibilite",
	"subtitle" => "Edit",
	"breadcrumb" => Array(
		"Possibilite",
		"Edit")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit possibilite #{{$possibiliteEntity->id}}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route("possibilite.edit2", Array(), false)}}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Texte">Texte</label>
                      <input type="text" class="form-control" id="Texte" placeholder="Texte" value="{{$possibiliteEntity->Texte}}" name="Texte">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$possibiliteEntity->id}}">
                </form>
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
