 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPLOAD ASSIGMENT</title>
    <!-- <link rel="stylesheet" type="text/css" href="login.css"> -->
      <link rel="stylesheet" type="text/css" href="dashbord.css">
    <!-- <script type="text/javascript">
            alert('Here we learn the best way of creating different shapes ranging between A-Z');
     </script> -->
    <!-- CSS only -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet" >





  </head>

 <body style="background-color: white !important;">

<div class="">


 <div class="side-menu col-md-3">
    
     <div class="brand-name">

        <h1>KINDER CARE</h1>
         
     </div>

     <ul>
        
       <li style="color:white;"><a href="dashbord.php">DASHBOARD</a></li>

         <li><a class="active" href="assignement.php">ASSIGNEMENT</a></li>

          <li><a class="active" href="uplodedassignement.php">Uploaded Assignment</a></li>

         <li ><a href="registerpupli2.php">Register Students</a></li>

         <li ><a href="pupilRegistration.php">All Students</a></li>

         <li><a href="teacherPage.php"> MARKS </a></li>

       <li><a class="active" href="marks.php">STATUS</a></li>

       <li><a href="##" style="color:white;">
            
            <?php
                if (isset($_SESSION['userUid'])) {

               echo '<form action="logout.php" method="POST" ><button type="submit" name="logout" > Log Out </button> </form>'; 

               }
            ?>

   
 </a></li>

         

     </ul>

  </div>
