<?php

if (isset($_POST['REGISTER'])) {

}

 include 'dbh.inc.php';


$fname = $lname = $Pnumber =$usercode = "";
if ($_SERVER['REQUEST_METHOD']=='POST'){
                        $fname= mysqli_real_escape_string($conn,$_POST['Fname']);
                        $lname=mysqli_real_escape_string($conn,$_POST['lname']);
                        $Pnumber=mysqli_real_escape_string($conn,$_POST['Pnum']);
                        $usercode=mysqli_real_escape_string($conn,$_POST['Ucode']);
                    }    
/*
  $fname=$_POST["Fname"];
  $lname=$_POST["lname"];
  $Pnumber=$_POST["Pnum"];
  $usercode=$_POST["Ucode"];*/


   $sql="INSERT INTO pupil(fName,lName,phoneNumber,usercode,status)
        values( '$fname','$lname','$Pnumber',' $usercode','activate');";
        mysqli_query($conn,$sql);

        header('location:pupilRegistration.php');

        
                    




?>