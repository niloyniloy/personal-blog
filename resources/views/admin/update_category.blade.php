@extends('admin.layouts.main')
@section('content')
<div id="tab-general">
	<div class="row mbl">
		<div class="col-lg-12">
			<div class="col-md-12">
				<div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-green">
						<div class="panel-heading">
							Update Category </div>
							<div class="panel-body pan">
								<form action="<?php echo url();?>/admin/edit_update_category" method="POST" enctype="multipart/form-data">
									<input type='hidden' name='id' value='<?php echo  $category_details->id; ?>'>
									<div class="form-body pal">
										<div class="row">
											<div class="col-md-12">

											</div>

										</div>
										<input type="hidden" name="_token" value="{{ csrf_token() }}">

										<div class="form-group">
											<label for="inputSubject" class="control-label">
												Name</label>
												<div class="input-icon right">
													<i class="fa fa-tag"></i>
													<input id="inputSubject" type="text" placeholder="" value='<?php echo  $category_details->name; ?>' name='title' class="form-control" /></div>
												</div>
												

											</div>
											<div class="form-actions text-right pal">
												<button type="submit" class="btn btn-primary">
													Update Category</button>
												</div>
											</form>
										</div>
									</div>

								</div>


							</div>
						</div>
					</div>
				</div>
				
				@endsection
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
				<script type="text/javascript" src="<?php echo url();?>/asset/jquery.tokenize.js"></script>
				<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
				<link rel="stylesheet" type="text/css" href="<?php echo url();?>/asset/jquery.tokenize.css" />
				<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                
                </script>
                <script type="text/javascript">
                $('document').ready(function(){

                	$('#tokenize').tokenize();
                	CKEDITOR.replace('editor1');

                });

                </script>