$(document).ready(function(){
	showTable();

	//add
	$('#add').click(function(){
		$('#addnew').modal('show');
		$('#addForm')[0].reset();
	});

	$('#addbutton').click(function(){
		var comp = $('#company').val();
		var prod = $('#product').val();
		if(comp!='' && prod!==''){
			var addForm = $('#addForm').serialize();
			$.ajax({
				type: 'POST',
				url: 'add.php',
				data: addForm,
				success:function(){
					$('#addnew').modal('hide');
					$('#addForm')[0].reset();
					showTable();
					$('#alert').slideDown();
					$('#alerttext').text('PRODDUCT Added Successfully');
				}
			});
		}
		else{
			alert('Please input both Fields')
		}
		
	});
});

function showTable(){
	$.ajax({
		type: 'POST',
		url: 'fetch.php',
		data: {
			fetch: 1
		},
		success:function(data){
			$('#table').html(data);
		}
	});
}