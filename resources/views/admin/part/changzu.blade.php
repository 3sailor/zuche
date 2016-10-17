@extends("admin.base.base")

@section("content")

长租表单

	<div class="page-content">
		<div class="page-header">
			<h1>
				表单信息
				<small>
					<i class="icon-double-angle-right"></i>
					表单信息
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 文本 </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 密码 </label>

						<div class="col-sm-9">
							<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
							<span class="help-inline col-xs-12 col-sm-7">
								<span class="middle">帮助文字</span>
							</span>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 只读框</label>

						<div class="col-sm-9">
							<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
							<span class="help-inline col-xs-12 col-sm-7">
								<label class="middle">
									<input class="ace" type="checkbox" id="id-disable-check" />
									<span class="lbl"> 禁用 </span>
								</label>
							</span>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-4">改变大小</label>

						<div class="col-sm-9">
							<input class="input-sm" type="text" id="form-field-4" placeholder=".input-sm" />
							<div class="space-2"></div>

							<div class="help-block" id="input-size-slider"></div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-5">表格大小</label>

						<div class="col-sm-9">
							<div class="clearfix">
								<input class="col-xs-1" type="text" id="form-field-5" placeholder=".col-xs-1" />
							</div>

							<div class="space-2"></div>

							<div class="help-block" id="input-span-slider"></div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right">带图标的输入框</label>

						<div class="col-sm-9">
							<span class="input-icon">
								<input type="text" id="form-field-icon-1" />
								<i class="icon-leaf blue"></i>
							</span>

							<span class="input-icon input-icon-right">
								<input type="text" id="form-field-icon-2" />
								<i class="icon-leaf green"></i>
							</span>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-6">帮助按钮</label>

						<div class="col-sm-9">
							<input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />
							<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input</label>

						<div class="col-sm-9">
							<input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />
						</div>
					</div>

					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="button">
								<i class="icon-ok bigger-110"></i>
								提交
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="icon-undo bigger-110"></i>
								重置	
							</button>
						</div>
					</div>
				</form>
				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->

@endsection
