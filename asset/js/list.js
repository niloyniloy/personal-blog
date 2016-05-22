$('document').ready(function(){

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.delete_table_view').on('click',function(){
		
		var check = confirm('ARE YOUR SURE ?');  
		if (check) {

			var table_name = $(this).attr('data-table');
			var  id = $(this).attr('data-id');

			var url = 'http://localhost/blog/admin/delete_table';
			$.post(url,{table_name:table_name, id:id},function(response){

				$('.row'+id).remove();

			});
		}

	});

});