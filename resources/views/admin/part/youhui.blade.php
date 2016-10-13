@extends('admin.base.base')

@section('content')

	<div class="page-content">
		<div class="page-header">
			<h1>
				jqGrid
				<small>
					<i class="icon-double-angle-right"></i>
					Dynamic tables and grids using jqGrid plugin
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<div class="alert alert-info">
					<i class="icon-hand-right"></i>

					Please note that demo server is not configured to save the changes, therefore you may get an error message.
					<button class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</button>
				</div>

				<table id="grid-table"></table>

				<div id="grid-pager"></div>

				<script type="text/javascript">
					var $path_base = "/";//this will be used in gritter alerts containing images
				</script>

					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div><!-- /.main-content -->

@endsection


@section("myscript")


@endsection

