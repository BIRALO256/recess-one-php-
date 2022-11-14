                 <?php

              include'dbh.inc.php'; 
              session_start();
              
                if (!isset($_SESSION['userUid'])) {

 header("Location: ../recesspart2/index.php");
 }
              include 'databse.php';


         ?>       


         
         <?php include "sidebar.php" ;?>

  <div class="content" style="padding-left: 250px; padding-top: 300px;">

        <br>
        <br>
        
        
   <table  style="width:650px; text-align: center; line-height:40px; background:blanchedalmond;"  border="0px";>
        <thead>
         <tr>
            <th colspan="4"><h2 style="color:red;">Assignment</h2></th>
            <th></th> 
         <tr>

         <tr>
            <th><P style="color:black;" >letter</P></th>
             <th><P style="color:black;" >date and time</P></th>
             <th><P style="color:black;">duration</P></th>
             <th><P style="color:black;">assignement_id</P></th>
             
        </tr>
        </thead>
        <tbody>
            <?php 
    require_once('comment.php');
          $sql=mysqli_query($conn,"select * from uploadassigment");
          // this while loop is used to fetch data from the data base and store the as an array
          while ($row=mysqli_fetch_array($sql))
           {

            ?>
     <tr> 
         <td><?php echo $row['letter']; ?></td>
        <td><?php echo $row['date']; ?></td>
         <td><?php echo $row['duration']; ?></td>
         <td><?php echo $row['assignement_id']; ?></td>
        
     </tr>
 <?php } ?>
     </tbody>
     
 </table> 
                    
  </div>

                                  

    </body>
</html>