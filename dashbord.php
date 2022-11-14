<?php


 session_start();
  if (!isset($_SESSION['userUid'])) {

 header("Location: ../recesspart2/index.php");
 }

   include 'databse.php';
   if (isset($_POST['submit']))
 {

      $letter=$_POST['letter'];
      $date=$_POST['date'];
      $duration=$_POST['duration'];

      $sql="INSERT INTO `uploadassigment` (`letter`, `date` ,`duration`, `assignement_id`) values( ' $letter','$date','$duration', '222') ";
      $result=mysqli_query($conn,$sql);
      if ($result) {
        
       header("Location:assignement.php");
      }
      else
      {

       header("Location:assignement.php");
       
      }
   

}

?>


         
         <?php include "sidebar.php" ;?>




     <!-- <h1 style="" > You are welcome <?php echo $_SESSION['userUid'];?> </h1> -->

    <div class="content col-md-9">
     




    <p style="padding-bottom: 50px;"></p>
    <div class="col-md-4" id='' style="">
      <h4 style="">All information in the database</h4><br>
      <div style="background-color: yellow;"> total students

         <?php

       include 'databse.php';

       $query="SELECT userCode from pupil order by userCode";
       $query_run=mysqli_query($conn,$query);

      $row=mysqli_num_rows($query_run);
       echo '<h1>'.$row.'</h1>';



         ?>
    
      
        <div>

          <div style="background-color: yellow; flex: right;"> teachers available

         <?php

       include 'databse.php';

       $query="SELECT idnumber from teachers2 order by idnumber";
       $query_run=mysqli_query($conn,$query);

      $row=mysqli_num_rows($query_run);
       echo '<h1>'.$row.'</h1>';



         ?>
    
      
        <div>



        <div>

          <div style="background-color: yellow; flex: right;"> total assignment

         <?php

       include 'databse.php';

       $query="SELECT assignement_id from uploadassigment order by assignement_id";
       $query_run=mysqli_query($conn,$query);

      $row=mysqli_num_rows($query_run);
       echo '<h1>'.$row.'</h1>';



         ?>
    
      
        <div>


            

      



    </div>
    </div>
  </body>

   <script src="bootstrap/jquery.min.js"></script>

   <!-- JavaScript Bundle with Popper -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</html>

