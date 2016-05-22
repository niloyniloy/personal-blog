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
                                                Add Tag  </div>
                                            <div class="panel-body pan">
                                                <form action="<?php echo url();?>/admin/insert_tag" method="POST" enctype="multipart/form-data">
                                                <div class="form-body pal">
                                                   
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-group">
                                                        <label for="inputSubject" class="control-label">
                                                            Tag</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-tag"></i>
                                                            <input id="inputSubject" type="text" placeholder="" name='name' class="form-control" /></div>
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
			   
				