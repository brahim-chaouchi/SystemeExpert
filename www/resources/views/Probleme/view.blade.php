@extends("template", Array(
	"active" => "Probleme",
	"dot" => "View",
	"title" => "Probleme",
	"subtitle" => "View",
	"breadcrumb" => Array(
		"Probleme",
		"View")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">View probleme #{{$problemeEntity->id}}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                    {{$problemeEntity->Intitule}}
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo route("probleme.edit1", Array("id" => $problemeEntity->id), false); ?>">Edit</a>
                  <a href="<?php echo route("probleme.delete", Array("id" => $problemeEntity->id), false); ?>">Delete</a>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
