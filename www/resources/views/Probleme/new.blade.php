@extends("template", Array(
	"active" => "Probleme",
	"dot" => "New",
	"title" => "Probleme",
	"subtitle" => "New",
	"breadcrumb" => Array(
		"Probleme",
		"New")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add a probleme</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="designation">Intitule</label>
                      <input type="text" class="form-control" id="Intitule" placeholder="Intitule" name="Intitule">
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
