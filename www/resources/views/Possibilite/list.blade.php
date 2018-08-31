@extends("template", Array(
	"active" => "Possibilite",
	"dot" => "List",
	"title" => "Possibilite",
	"subtitle" => "List",
	"breadcrumb" => Array(
		"Possibilite",
		"List")))
@section("content")
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">List possibilites</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">Search</button>
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.box-body -->
                </form>
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">Id</th>
                      <th>Texte</th>
                      <th style="width: 50px"></th>
                    </tr>
                    @foreach($possibiliteIterator as $possibiliteEntity)
                    <tr>
                      <td>{{$possibiliteEntity->id}}</td>
                      <td>{{$possibiliteEntity->Texte}}</td>
                      <td><a href="<?php echo route("possibilite.view", Array("id" => $possibiliteEntity->id), false); ?>">View</a></td>
                    </tr>
                    @endforeach
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
@endsection
