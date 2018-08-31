@extends("template", Array(
	"active" => "Possibilite",
	"dot" => "View",
	"title" => "Possibilite",
	"subtitle" => "View",
	"breadcrumb" => Array(
		"Possibilite",
		"View")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">View possibilite #{{$possibiliteEntity->id}}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                    {{$possibiliteEntity->Texte}}
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo route("possibilite.edit1", Array("id" => $possibiliteEntity->id), false); ?>">Edit</a>
                  <a href="<?php echo route("possibilite.delete", Array("id" => $possibiliteEntity->id), false); ?>">Delete</a>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
