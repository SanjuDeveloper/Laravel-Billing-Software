<?php
session_start();
require_once("BillingSoftware_db.php");
		
		
		if((isset($_POST['LOGIN'])) && ($_POST['LOGIN']=='Admin'))  //========= FOR LOGIN  ======//
		{
			$uname = mysqli_real_escape_string($conn,$_POST['uname']); 
			
			$pswd = mysqli_real_escape_string($conn,$_POST['pswd']); 
			//$pswd = md5($password);
			$query=mysqli_query($conn,"SELECT * FROM `users` WHERE `name`='$uname' AND `password`='$pswd'");
			if(mysqli_num_rows($query)>0)
			{	
				$userdata = mysqli_fetch_object($query);
				session_regenerate_id();
				$_SESSION["USER"] = $_POST['uname'];
				$_SESSION["USERID"] = $userdata->id;
				$_SESSION["B"] = "B";
				$_SESSION["C"] = "C";
				$_SESSION["D"] = "D";
				session_write_close();
				
				$login = 1;
				$status = 1;
				
			}else
			{			
					$login = 0;
					$status = 0;
			}
			
			$response = array(
				'login'=>$login,
				'status'=>$status
				);
			
			$data = json_encode($response);
			echo $data;
			exit();
		}	
		
		

		//==========FOR SIGNUP ===//
		if((isset($_POST['SIGNUP'])) && ($_POST['SIGNUP']=='TRUE'))
		{	
			$uname = $_POST['uname'];		
			$pswd = $_POST['pswd'];//md5($_POST['pswd']);		
			$email = $_POST['email'];		
			$mobile = $_POST['mobile']; 
			$course = $_POST['course']; 
			$query=mysqli_query($conn,"INSERT INTO `users`(`name`, `email`,`phone`,`password`,`course`)VALUES('$uname','$email','$mobile','$pswd','$course')");		
			if($query==true)	
			{		
				$USERID = mysqli_insert_id($query);	
				session_regenerate_id();
				$_SESSION["USER"] = $_POST['uname'];
				$_SESSION["USERID"]= $USERID;
				session_write_close();		
				$login = 1;			
				$status = 1;			
			}else		
			{			
				$login = 0;	
				$status = 0;
			}			
			$response = 
				array(			
				'signup'=>$login,
				'status'=>$status	
				);	
			$data = json_encode($response);
			echo $data;	
			exit();	
		}

		if (isset($_REQUEST['Update']))  {
			$userId = $_REQUEST['id'];
			$value = $_REQUEST['Update'];
			$status = 'Active';
			if ($value == 'Active') {
				$status = 'Inactive';
			}
			
			$updateUser =mysqli_query($conn,"UPDATE  `users` SET `Status`='$status' WHERE `id`='$userId'");
			if ($updateUser) {
				echo "True";
			}
		}

		if (isset($_REQUEST['Delete'])) {
			$id= $_REQUEST['Delete'];
			//echo "DELETE * from  `users` WHERE `id`='$id'";
			$deleteUser =mysqli_query($conn,"DELETE  from  `users` WHERE `id`='$id'");
			if ($deleteUser) {
				echo "True";
			}
		}
		
		?>