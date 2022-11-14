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
            <th colspan="6"><h2 style="color:red;">PUPILS</h2></th>
            <th></th> 
         <tr>

         <tr>
            <th><P style="color:black;" >First name</P></th>
             <th><P style="color:black;" >Last name</P></th>
             <th><P style="color:black;">Phone Number</P></th>
             <th><P style="color:black;">Usercode</P></th>
             <th><P style="color:black;">Status</P></th>
             <th><P style="color:green;">Operation</P></th>

        </tr>
        </thead>
        <tbody>
            <?php 
    require_once('comment.php');
          $sql=mysqli_query($conn,"select * from pupil");
          // this while loop is used to fetch data from the data base and store the as an array
          while ($row=mysqli_fetch_array($sql))
           {

            ?>
     <tr> 
         <td><?php echo $row['fName']; ?></td>
        <td><?php echo $row['lName']; ?></td>
         <td><?php echo $row['phoneNumber']; ?></td>
         <td><?php echo $row['userCode']; ?></td>
         <td><?php echo $row['status']; ?></td>

         <td> <button name="submit"><a href="activate.php?activate=<?= $row['userCode'];?>">Activate </a></button>

            <button><a href="deactivate.php?deactivate=<?= $row['userCode'];?>">Deactivate </a></button> </td>
     </tr>
 <?php } ?>
     </tbody>
     
 </table> 
                    
  </div>

                                  

    </body>
</html>