@extends("template", Array(
	"active" => "Question",
	"dot" => "View",
	"title" => "Question",
	"subtitle" => "View",
	"breadcrumb" => Array(
		"Question",
		"View")))
@section("content")
          <div class="row">
            <!-- column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">View question #{{$questionEntity->id}}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div>
                    {{$questionEntity->Libelle}}
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo route("question.edit1", Array("id" => $questionEntity->id), false); ?>">Edit</a>
                  <a href="<?php echo route("question.delete", Array("id" => $questionEntity->id), false); ?>">Delete</a>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col -->
          </div>   <!-- /.row -->
@endsection
