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
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($category as $category)
									<tr class='row{{  $category->id }}'>
										<td>1</td>
										<td>{{  $category->name }}</td>

										<td>
											<a href='<?php echo url();?>/admin/update_category/{{  $category->id }}'><span class="label label-sm label-success">edit</span></a> &nbsp; 

											<a class='delete_table_view' data-table='category' data-id='{{  $category->id }}' href='javascript:void(0);'><span class="label label-sm label-success">update</span></a>
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
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'> </script>
<script src='<?php echo url();?>/asset/js/list.js'> </script>
<script>

</script>
@endsection

