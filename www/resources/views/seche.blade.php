@extends("template", Array(
	"active" => "Dashboard",
	"dot" => "Dashboard v1",
	"title" => "Deviner",
	"subtitle" => "Aide à la résolution de problème",
	"breadcrumb" => Array(
		"Deviner")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Rien</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                    Je sèche complètement, plus une idée...
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo route("index"); ?>">Recommencer</a>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
