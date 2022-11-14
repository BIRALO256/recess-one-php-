 <?php
session_start();
  if (!isset($_SESSION['userUid'])) {

 header("Location: ../recesspart2/index.php");
 }

?>




         
         <?php include "sidebar.php" ;?>


  </div>


  <div class="container">
    <!-- <div class="header">
        <div class="nav">
            <div class="search">

            <input type="text" placeholder="search..">
            <button type="submit"><img src="search.png" alt=""></button>
            </div>

            <div class="user">
                <a href="#" class="btn"> Add New</a>
                
            </div>

            
        </div>
        

    </div> -->
  </div>


   
     <div class="content">


<!-- 
           <div class="taskbar" >
       <a class="active" href="assignement.php">UPLOAD ASSIGNEMENT</a>
       <a href="pupilRegistration.php">STUDENT REGESITRATION</a>
       <a href="teacherPage.php">TEACHER'S PAGE</a>
         </div> -->
   
         
<div align="center" style="padding-top: 100px;">
       <table  style="width:650px; text-align: center; line-height:40px; background:blanchedalmond;"  border="0px";>
        <thead>
         <tr>
            <th colspan="6"><h2 style="color:red;">MARKS SCORED</h2></th> 
         <tr>

        <tr>
            <th><P style="color:black;" >Assignement id</P></th>
             <th><P style="color:black;" >User Code</P></th>
             <th><P style="color:black;">Marks Scored</P></th>
             <th><P style="color:black;">time taken in min</P></th>
             <th><P style="color:black;"> Comment</P></th>
             <th><P style="color:green;">Add comment</P></th>
        </tr>
        </thead>
        <tbody>
            <?php 
    require_once('comment.php');
          $sql=mysqli_query($conn,"select * from marks");
          // this while loop is used to fetch data from the data base and store the as an array
          while ($row=mysqli_fetch_array($sql))
           {

            ?>
       
    <tr> 
         <td style="color:black;"><?php echo $row['assignement_id']; ?></td>
        <td style="color:black;"><?php echo $row['userCode']; ?></td>
         <td style="color:black;"><?php echo $row['marks']; ?></td>
          <td style="color:black;"><?php echo $row['duration']; ?></td>
         <td style="color:black;"><?php echo $row['comment']; ?></td>
          <td style="color:red;"><button><a href="update.php?comment=<?= $row['userCode'];?>&&jovic=<?= $row['assignement_id'];?>">Comment</a></button></td>

     </tr>
 <?php } ?>
     </tbody>
     
 </table> 

<br>
<br>
  
  <form action="update.php" method="POST">
      
    <h2 style="color:red;" >ADD COMMENT</h2>
   <!--  <label style="color:white;" >User Code:<input type="text" name="usercode" placeholder="enter usercode"></label>
 -->
           <div id='contentArea'>
                    <div id='divBorder'> 
                        <div id="addComment">
                            <br>
                            <textarea   name="comment"  placeholder="Add Comment for student" col='50'></textarea>
                            <br>
                            <div style="display: inline-block;">
                            <br>
                                <input type="submit"value="submit" name="Submit">
                            </div>
                        </div>
                    </div>

  </form>
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
</html>