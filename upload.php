<?php
 include 'databse.php';
  if (isset($_POST['submit'])) 

  {
  	
 $letters=$_POST['letter'];
 $date=$_POST['date'];
 $time=$_POST['time'];
 $duration=$_POST['duration'];

 $sql= "INSERT INTO uploadassigment (letter,date_of_assigment,start_time,duration) values (' $letters','$date','$time','$duration') ";

 $query = mysqli_query($conn, $sql);

 if($query){
            header("Location:assignement.php");
            exit()
        }

  }


?>