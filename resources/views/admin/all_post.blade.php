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
						<div class="panel-heading">Post List </div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Category </th>
										<th>Title</th>
										<th>tag</th>
										<th>Post</th>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($post as $user)
									<tr>
										<td>1</td>
										<td>{{  $user->name }}</td>
										<td>{{  $user->title }}</td>
										<td>Henry</td>
										<td>{{  $user->post }}</td>
										<td> <img width='100' src='<?php echo url();?>/uploads/{{  $user->image }}'></td>
										<td><a class='delete_post' href=''>
											<span class="label label-sm label-success">Approved</span>
										</a>

									</td>
								</tr>
								
								@endforeach
								
							</tbody>
						</table>
						{!! $post->render() !!}
					</div>
				</div>
				
				
			</div>
			
		</div>
		
		
	</div>
	
</div>
</div>

@endsection