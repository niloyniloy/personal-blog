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
                        <div class="panel panel-yellow">
                            <div class="panel-heading">Tag List </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php $count= 0;?>
									@foreach ($tags as $tag)
                                    <tr>
                                        <td><?php echo $count= $count+1;?></td>
                                        <td>{{  $tag->name }}</td>

										<td><a href=''><span class="label label-sm label-success">Edit</span></a>
										<a href=''><span class="label label-sm label-success">Delete</span></a>
										</td>
                                    </tr>
									
									@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                       
                    </div>
                    
                </div>
                            
                            
                            </div>
                            
                        </div>
                    </div>
					
					@endsection