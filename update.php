 <?php

 

 include 'dbh.inc.php';

  
  if (isset($_POST['Submit'])) {

         $status=$_POST['activate'];
         

         $usercode=$_GET['userCode'];
         $assignement=$_GET['assignement_id'];

 $sql="UPDATE `pupil` SET `status` = '$status' WHERE `userCode` = ' $usercode'&& `assignement_id` = ' $assignement'";

        $results=mysqli_query($conn,$sql);

        if ($results) {

        	header('location:pupilRegistration.php');
        	
        }

        

}  


 ?>