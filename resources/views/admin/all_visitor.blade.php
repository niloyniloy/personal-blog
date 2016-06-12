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
						<div class="panel-heading">Post Visitor List </div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Ip Address </th>
										<th>Date Time </th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($all_visitor as $all_visitor)
									<tr class='row{{  $all_visitor->id }}'>
										<td>1</td>
										<td>{{  $all_visitor->ip_address }}</td>
                                        <td> <?php echo date('d M Y H:i:s',$all_visitor->date_time); ?></td>
										<td>
											<a href='<?php echo url();?>/admin/update_category/{{  $all_visitor->id }}'><span class="label label-sm label-success">edit</span></a> &nbsp; 

											<a class='delete_table_view' data-table='category' data-id='{{  $all_visitor->id }}' href='javascript:void(0);'><span class="label label-sm label-success">update</span></a>
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

