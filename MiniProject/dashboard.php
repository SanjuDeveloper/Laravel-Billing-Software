<?php session_start(); 
if(!isset($_SESSION['USER'])){ header('location:index.php'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up Form</title>
  <style>
  
  tr:nth-child(even) { 
            background-color: #c4ffd2; 
        } 
		tr:nth-child(odd) { 
            background-color:#fafcd2; 
        } 
		#appadd {
    white-space: nowrap;
    overflow: hidden;
    width:80px;
    height:30px;
    text-overflow: ellipsis; 
}
</style>
</head>
<body>
	<h1> user : <?= $_SESSION["USER"] ?> </h1>  <a href="logout.php"> Logout</a>
<table class="table table-hover gridtable" style="width:100%;table-layout:fixed;" id="testTable">
		    <thead class="thead-dark">
		     <tr>
			    <th>Sr No.</th>
			    <th> Name</th>
				<th>email</th>
			    <th>phone</th>
			    <th>course</th>
			    <th>Status</th>
				<th>Action</th>
			 </tr>
			</thead>
            <tbody>
 				<?php 
				require("BillingSoftware_db.php"); 
				
				$Get_Cat=mysqli_query($conn,"SELECT * FROM `users`");
				$count=1;
				while($Cat = mysqli_fetch_array($Get_Cat))
				{
					
					
					//if($count%2==0){ $cls = "table-warning"; } if($product['status']==1){ $cls = "table-success"; }else{ $cls="table-danger"; }
					?>
					<!--<tr class="<?php echo $cls; ?>"> -->
					<tr class="text-center">
						<td id="appadd"><?php echo $count;?></td>
						<td id="appadd"><?php echo $Cat['name']; ?></td>
						<td id="appadd"><?php echo $Cat['email']; ?></td>
						<td id="appadd"><?php echo $Cat['phone']; ?></td>
						<td><?php echo $Cat['course']; ?></td>
					
						<td id="appadd"><?php
								if($Cat['Status']==1){
									$status ="Active";
								}else {
									$status="Inactive";
								}
									?>

								<input type="submit" class="btn btn-success btn-sm" id="Status" name ="<?php echo $Cat['id'];?>" value="<?= $status?>">
								
						</td>
						<td id="appadd"><input type="submit" class="btn btn-success btn-sm" id="Delete" name ="<?php echo $Cat['id'];?>" value="Delete"></td>
					
					
					</tr>
					
					<?php  $count++;
				}  ?>
			</tbody>
			</table>
			</body>
			</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$("#Delete").click(function(){
	let user = $('#Delete').attr('name'); alert(user);
  $.get("login-exec.php?Delete="+user, function(data, status){
    alert("Data: " + data + "\nStatus: " + status);

  });
});	
	$('#Status').click(function() 
	{
		alert("sanjuji");
		let status = $('#Status').val(); alert(status);
		let userId = $('#Status').attr('name'); 
		
		alert(userId);
		
		$.ajax({
			type: 'POST',
			url: 'login-exec.php?Update='+status+'&id='+userId,
			//data: {id:userId,value:status},
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			success: function (data)
			{
       		 alert(data);
				
			}
		})
		return false;
	});

		
	</script>
		
		