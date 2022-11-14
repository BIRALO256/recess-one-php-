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

      $sql="INSERT INTO `uploadassigment` (`letter`, `date` ,`duration`) values( ' $letter','$date','$duration') ";
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
      <h4 style=""> Type in letters you what to be attempted atleast 1 and atmost 8 ragging between A-Z</h4><br>
      <div style="">

    
        <br><br>
      
        <div>


            <form method="POST">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Letters:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="letter" id="inputEmail3" placeholder="Enter letters for attempting">
                  </div>
                </div>

                <div class="form-group row mt-2">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Start Date:</label>
                  <div class="col-sm-10">
                    <input type="datetime-local" class="form-control" name="date" id="inputPassword3">
                  </div>
                </div>


                <div class="form-group row mb-2">
                  <label for="inputPassword3" class="col-sm-2 col-form-label" >Duration</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="duration" min="0">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </div>
                </div>

            </form>

      



    </div>
    </div>
  </body>

   <script src="bootstrap/jquery.min.js"></script>

   <!-- JavaScript Bundle with Popper -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</html>