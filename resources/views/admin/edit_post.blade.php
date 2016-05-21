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
							Edit Post  </div>
							<div class="panel-body pan">
								<form action="<?php echo url();?>/admin/post/update_edit_post" method="POST" enctype="multipart/form-data">
									<div class="form-body pal">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="inputName" class="control-label">
														category Id</label>
														<div class="input-icon right">
															<i class="fa fa-user"></i>
															<select name='category_id' class='form-control'> 
																<option> Select </option>
																<?php $cat_list =  Test::bob(); ?>
																<?php foreach ($cat_list as $category){?>
																<option  value='<?php echo $category->id; ?>' <?php if ($category->id == $post_details->category_id) { echo 'selected';}?> > <?php echo $category->name; ?> </option>

																<?php }?>

															</select>

														</div>
													</div>
												</div>

											</div>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<div class="form-group">
												<label for="inputSubject" class="control-label">
													Title</label>
													<div class="input-icon right">
														<i class="fa fa-tag"></i>
														
														<input id="inputSubject" value="<?php echo $post_details->title; ?>" type="text" placeholder="" name='title' class="form-control" /></div>
													</div>
													<div class="form-group">
														<label for="inputSubject" class="control-label">
															Image</label>
															<div class="input-icon right">
																<i class="fa fa-tag"></i>
																<a target="_blank" href="<?php echo url();?>/uploads/<?php echo $post_details->image;?>"> View Image</a>
																<input type="file" name='image' placeholder="" class="form-control" /></div>
															</div>
															<div class="form-group">
																<label for="inputSubject" class="control-label">
																	Tag</label>
																	<div class="input-icon right">
																		<i class="fa fa-tag"></i>
																		<select name='tag[]' id="tokenize" style='width:400px; height:40px;' multiple="multiple" class="tokenize-sample" >
																			<?php $tag_list =  Test::tags_list(); ?>
																			<?php $selected_tag_list =  Test::post_tag_list( $post_details->id ); ?>
																			<?php foreach ($tag_list as $tag){?>
																			<option  value='<?php echo $tag->id; ?>'> <?php echo $tag->name; ?> </option>

																			<?php }?>
																		</select>
																	</div>
																</div>
																<input type='hidden' name='id' value='<?php echo $post_details->id; ?>'>
																<div class="form-group">
																	<label for="inputMessage" class="control-label">
																		Message</label><textarea id="editor1" rows="5" name='post' class="form-control"> <?php echo $post_details->post; ?></textarea></div>
																		<div class="form-group mbn">
																			<div class="checkbox">
																			
																			
																				</div>
																			</div>
																			<div class="form-actions text-right pal">
																				<button type="submit" class="btn btn-primary">
																					Update Post</button>
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