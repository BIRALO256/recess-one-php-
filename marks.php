<?php
session_start();
  if (!isset($_SESSION['userUid'])) {

 header("Location: ../recesspart2/index.php");
 }

?>




         
         <?php include "sidebar.php" ;?>


  </div>



   
     <div class="content">

         
<div align="center" style="padding-top: 100px;">



<table id="marksTable" class="display cell-boarder boarder-primary table-stripped rounded table-boardered">
        <thead>
            <tr>
                <th>User Code</th>
                <th>Request</th>
              <th class="text-danger">Delete</th>
            </tr>
        </thead>
        <tbody>
                    <?php 
    require_once('comment.php');
          $sql=mysqli_query($conn,"select * from status");
          // this while loop is used to fetch data from the data base and store them as an array
          while ($row=mysqli_fetch_array($sql))
           {

            // $usercode=$row['userCode'];

            ?>
            <tr>

        <td style="color:black;"><?php echo $row['userCode']; ?></td>
         <td style="color:black;"><?php echo $row['Status']; ?></td>
          <td style="color:black;"><button><a href="delete.php?deleteid=<?= $row['userCode'];?>">Delete</a></button> </td>
            </tr>

 <?php } ?>
        </tbody>

    </table>







  
         <div id="activation">
                            <h2>CHANGE STATUS</h2>
                            <h4 style="color:white;" > Enter usercode below and type Activate to activate student or Deactivate to deactivate student </h4>

         <form action="update.php" method="POST">
                <!-- <input type="text" placeholder="Student usercode----" name="usercode"> -->
                <p><input type="text" name="activate" placeholder="activate or deactivate"></p>

                <p><input type="submit" value='submit' name="REGISTER">
        </form>
                      
               
                 

    </div>
           



  </div>
                        </div>
                    </div>
                    <p style="padding-bottom: 5px;"></p>     
                </div>
            </div>
            
        </div>
         


     </div> 

   
  </div>


    </body>

    


<script>
    $(document).ready(function() {
    $('#marksTable').DataTable();
} );
</script>

<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

</html>
