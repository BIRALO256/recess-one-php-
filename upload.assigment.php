<?php


 include 'databse.php';
   if (isset($_POST['submit']))
 {

      $letter=$_POST['letter'];

      $date=date("Y-m-d", strtotime($_POST['date']));

      $time=date("h:i:s", strtotime($_POST['time']));

      $duration=$_POST['duration'];

      $sql="INSERT INTO 'uploadassigment' (letter, date ,time ,duration) values( ' $letter','$date','$time','$duration') ";
      $result=mysqli_query($conn,$sql);
      if ($result) {
         echo "exam submited successfully";
       header("Location:assignement.php");
      }
      else
      {

       header("Location:assignement.php");
       
      }
   

}

?>