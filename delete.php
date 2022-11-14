<?php


include 'databse.php';

if (isset($_GET['deleteid'])) {

	$usercode=$_GET['deleteid'];
	
	$sql="DELETE FROM `status` WHERE `userCode`='$usercode' ";

	$runquery=mysqli_query($conn,$sql);

	if ($runquery) 
	{

header(' location: marks.php');
	
	}
	
}

?>