<?php


include 'databse.php';

if (isset($_GET['deactivate'])) {

	$usercode=$_GET['deactivate'];
	
  $sql="UPDATE `pupil` SET `status` = 'Deactivate' WHERE `userCode` = '$usercode'";

	$runquery=mysqli_query($conn,$sql);

	if ($runquery) 
	{

header(' location: pupilRegistration.php');
	
	}
	
}

?>