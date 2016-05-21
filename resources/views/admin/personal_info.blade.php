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
                                               Personal Info</div>
                                            <div class="panel-body pan">
                                                <form action="<?php echo url();?>/admin/update_personal_info" method="POST" enctype="multipart/form-data">
                                                <div class="form-body pal">
                                                    
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-group">
                                                        <label for="inputSubject" class="control-label">
                                                            Name </label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-tag"></i>
                                                            <input id="inputSubject" type="text" placeholder="" name='title' class="form-control" /></div>
                                                    </div>
													<div class="form-group">
                                                        <label for="inputSubject" class="control-label">
                                                            Email </label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-tag"></i>
                                                            <input id="inputSubject" type="text" placeholder="" name='email' class="form-control" /></div>
                                                    </div>
													<div class="form-group">
                                                        <label for="inputSubject" class="control-label">
                                                            Image </label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-tag"></i>
                                                            <input id="inputSubject" type="file" placeholder="" name='image' class="form-control" /></div>
                                                    </div>
													<div class="form-group">
                                                        <label for="inputSubject" class="control-label">
                                                            Fb Link </label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-tag"></i>
                                                            <input id="inputSubject" type="text" placeholder="" name='fb_link' class="form-control" /></div>
                                                    </div>
													<div class="form-group">
                                                        <label for="inputSubject" class="control-label">
                                                            Google Link </label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-tag"></i>
                                                            <input id="inputSubject" type="text" placeholder="" name='google_link' class="form-control" /></div>
                                                    </div>
												     <div class="form-group">
                                                        <label for="inputSubject" class="control-label">
                                                            Contact Number </label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-tag"></i>
                                                            <input id="inputSubject" type="text" placeholder="" name='contact_number' class="form-control" /></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputMessage" class="control-label">
                                                            Address</label><textarea id="editor1" rows="5" name='address' class="form-control"></textarea>
													</div>
													<div class="form-group">
                                                        <label for="inputMessage" class="control-label">
                                                            Description Text</label><textarea id="editor2" rows="5" name='description_text' class="form-control"></textarea>
													</div>
													<div class="form-group">
                                                        <label for="inputMessage" class="control-label">
                                                            Description Long</label><textarea id="editor3" rows="5" name='description_long' class="form-control"></textarea>
													</div>
                                                    <div class="form-group mbn">
                                                        <div class="checkbox">
                                                           </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">
                                                       Update Personal Info</button>
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
			   
				