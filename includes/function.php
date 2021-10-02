<?php 
	require_once('includes/connection.php');
	// Insert Record Function

	function InsertRecord(){
		global $conn;
		$UserName = $_POST['UName'];
		$UserEmail = $_POST['UEmail'];
		//echo $UserName, $UserEmail;

		$query = "INSERT INTO student (UserName,UserEmail) values ('$UserName','$UserEmail')";
		$result=mysqli_query($conn,$query);

		if($result){
			echo 'Your Record has been saved in the Database';
		}
		else{
			echo 'Please Check Your Query';
		}
	}

	// Display Data Function
	function display_record(){
		global $conn;
		$value = "";
		$value = '<table class="table table-bordered">
					<tr>
						<td>User ID</td>
						<td>User Name</td>
						<td>user Email</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>';
		$query = "SELECT * FROM student";
		$result = mysqli_query($conn,$query);

		while($row=mysqli_fetch_assoc($result)){
			$value.='<tr>
						<td>'.$row['id'].'</td>
						<td>'.$row['UserName'].'</td>
						<td>'.$row['UserEmail'].'</td>
						<td> <button class="btn btn-success" id="btn_edit" data-id='.$row['id'].'><span class="fa fa-edit"></span></button> </td>
						<td><button class="btn btn-danger" id="btn_delete" data-id1='.$row['id'].'><span class="fa fa-trash"></span></td>
					</tr>';
		}
		$value.='</table>';
		echo json_encode(['status'=>'success', 'html'=>$value]);
	}


	// Get partcicular record
	function get_record(){
		global $conn;
		$UserID=$_POST['UserID'];
		$query= "SELECT * FROM student WHERE id='$UserID'";
		$result=mysqli_query($conn,$query);

		while($row=mysqli_fetch_assoc($result)){
			$User_data = array();
			$User_data[0]=$row['id'];
			$User_data[1]=$row['UserName'];
			$User_data[2]=$row['UserEmail'];
		}
		echo json_encode($User_data);
	} 


	// Update Function
	function update_value(){
		global $conn;
		$Update_ID=$_POST['U_ID'];
		$Update_User=$_POST['U_User'];
		$Update_Email=$_POST['U_Email'];

		$query = "Update student SET UserName='$Update_User', UserEmail='$Update_Email' WHERE id='$Update_ID'";
		$result=mysqli_query($conn,$query);
		if($result){
			echo 'Your Record Has Been Update';
		}
		else{
			echo 'Please Check Your Query';
		}
	}

	function delete_record(){
		global $conn;
		$Del_Id = $_POST['Del_ID'];
		$query = "DELETE FROM student WHERE id='$Del_Id'";
		$result=mysqli_query($conn,$query);

		if($result){
			echo 'Your Record Has Been Deleted ';
		}
		else{
			echo 'Please Check Your Query';
		}
	}

?>


