<?php


include 'databse.php';

if (isset($_GET['activate'])) {

	$usercode=$_GET['activate'];
	
  $sql="UPDATE `pupil` SET `status` = 'Activate' WHERE `userCode` = '$usercode'";

	$runquery=mysqli_query($conn,$sql);

	if ($runquery) 
	{

header(' location: pupilRegistration.php');
	
	}
	
}

?>