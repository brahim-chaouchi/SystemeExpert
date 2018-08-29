@extends("template", Array(
	"active" => "Question",
	"dot" => "Edit",
	"title" => "Question",
	"subtitle" => "Edit",
	"breadcrumb" => Array(
		"Question",
		"Edit")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit question #{{$questionEntity->id}}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route("question.edit2", Array(), false)}}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Libelle">Libelle</label>
                      <input type="text" class="form-control" id="Libelle" placeholder="Libelle" value="{{$questionEntity->Libelle}}" name="Libelle">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$questionEntity->id}}">
                </form>
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
