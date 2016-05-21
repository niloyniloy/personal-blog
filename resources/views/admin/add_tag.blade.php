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
                                                Add Post  </div>
                                            <div class="panel-body pan">
                                                <form action="post/insert_post" method="POST" enctype="multipart/form-data">
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
																	  <option  value='<?php echo $category->id; ?>'> <?php echo $category->name; ?> </option>
																	
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
                                                            <input id="inputSubject" type="text" placeholder="" name='title' class="form-control" /></div>
                                                    </div>
													<div class="form-group">
                                                        <label for="inputSubject" class="control-label">
                                                            Image</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-tag"></i>
                                                            <input type="file" name='image' placeholder="" class="form-control" /></div>
                                                    </div>
													<div class="form-group">
                                                        <label for="inputSubject" class="control-label">
                                                            Tag</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-tag"></i>
                                                            <select name='tag[]' id="tokenize" style='width:400px; height:40px;' multiple="multiple" class="tokenize-sample" >
																  <?php $tag_list =  Test::tags_list(); ?>
																	<?php foreach ($tag_list as $tag){?>
																	  <option  value='<?php echo $tag->id; ?>'> <?php echo $tag->name; ?> </option>
																	
																	 <?php }?>
															</select>
														</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputMessage" class="control-label">
                                                            Message</label><textarea id="editor1" rows="5" name='post' class="form-control"></textarea></div>
                                                    <div class="form-group mbn">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input tabindex="5" type="checkbox" />&nbsp; Send a copy to my e-mail address</label></div>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">
                                                        Add Post</button>
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
		
				<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                
            </script>
			   
				