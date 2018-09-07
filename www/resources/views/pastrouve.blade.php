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
                  <h3 class="box-title">Pas trouvé</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                    J'ai beaucoup de questions, mais aucune ne mene nulle part !<br>
                    Est-ce que ça veut dire que chacune mene quelque part ?
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo route("index"); ?>">Recommencer</a>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
