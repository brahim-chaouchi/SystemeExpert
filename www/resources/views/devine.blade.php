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
            <div class="box-header with-border">
              <h3 class="box-title">Deviner</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              Premiere question : {{$id}}
            </div><!-- /.box-body -->
            <div class="box-footer">
              Phase de recherche
            </div><!-- /.box-footer-->
          </div><!-- /.box -->
@endsection
