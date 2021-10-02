$(document).ready(function(){
	//alert('Working');
	Insert_record();
	view_record();
	get_record();
	update_record();
	delete_record();
})


// Insert Record in the Database
function Insert_record(){
	
	$(document).on('click', '#btn_register',function(){
		var User = $('#UserName').val();
		var Email = $('#UserEmail').val();
		//console.log(User,Email);

		if(User =="" || Email==""){
			$('#message').html(' Please Fill in the Blanks');
		}
		else{
			$.ajax(
			{
				url: 'insert.php',
				method: 'post',
				data:{UName:User,UEmail:Email},
				success: function(data){
					$('#message').html(data);
					$('#Registration').modal('show');
					$('form').trigger('reset');
					view_record();
				}
			})
		}
	})

	$(document).on('click','#btn_close',function(){
		$('form').trigger('reset');
		$('#message').html('');
	})
}

//Display record
function view_record(){
	$.ajax({
		url:'view.php',
		method:'post',
		success: function(data){
			data = $.parseJSON(data);
			if(data.status=='success'){
				//console.log(data.html);
				$('#table').html(data.html);
			}
		}
	})
}

//Get Particular Record
function get_record()
{
	$(document).on('click','#btn_edit',function(){
		var ID=$(this).attr('data-id');
		//console.log(ID);
		$.ajax({
			url:'get_data.php',
			method:'post',
			data:{UserID:ID},
			dataType: 'JSON',
			success: function(data){
				//console.log(data['2']);
				$('#Up_User_ID').val(data['0']);
				$('#Up_UserName').val(data['1']);
				$('#Up_UserEmail').val(data['2']);
				$('#update').modal('show');
			}
		})
	})
}

// Update Record
function update_record(){
	

	$(document).on('click','#btn_update', function(){
		var UpdateID = $('#Up_User_ID').val();
		var UpdateUser = $('#Up_UserName').val();
		var UpdateEmail = $('#Up_UserEmail').val();
		//console.log('Working');
		//console.log(UpdateID,UpdateUser,UpdateEmail);
		if(UpdateUser=="" || UpdateEmail==""){
			$('#up-message').html('Please Fill in the Blanks');
			$('#update').modal('show');
		}
		else{
			$.ajax({
				url:'update.php',
				method: 'post',
				data:{U_ID:UpdateID,U_User:UpdateUser,U_Email:UpdateEmail},
				success: function(data){
					$('#up-message').html(data);
					$('#update').modal('show');
					view_record();
				}
			})
		}
	})


}

// Delete Function
function delete_record(){
	$(document).on('click','#btn_delete',function(){
		//console.log('Working');
		var Delete_ID = $(this).attr('data-id1');
		$('#delete').modal('show');

		//console.log(Delete_ID);
		$(document).on('click','#btn_delete_record',function(){
			$.ajax({
			url:'delete.php',
			method:'post',
			data:{Del_ID:Delete_ID},
			success: function(data){
				//$('#delete').modal('show');
				//$(document).on('click','#btn_')
				$('#delete-message').html(data).hide(5000);
				view_record();

			}
		})

		})
	})
}
