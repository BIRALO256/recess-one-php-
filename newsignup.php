<?php
 include_once "databse.php";
if (isset($_POST['Sign'])) {
     //$fname= $_POST['fname'];
                        $lname=$_POST['lname'];
                        $email=$_POST['email'];
                        $username=$_POST['username'];
                        $email=$_POST['email'];
                        $password=$_POST['Password'];


                                     $sql = "INSERT INTO teachers2 (fname,lname,email,username,password)
        values( '$fname','$lname', '$email', '$username', '$password')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location:index.php");
        }
                        

}

/* include 'databse.php';


     $fname = $lname = $username =$email = $password="";
if ($_SERVER['REQUEST_METHOD']=='post'){

                        $fname= $_POST['fname'];
                        $lname=$_POST['lname'];
                        $email=$_POST['email'];
                        $username=$_POST['username'];
                        $email=$_POST['email'];
                        $password=$_POST['Password'];

                        $sql="INSERT INTO teachers2 (fname,lname,email,username,password)
        values( '$fname','$lname','$username',' $email','$password');";
        mysqli_query($conn,$sql);


                   header('location:index.php');
        exit();

                        //$password2=$_POST['Password2'];
                    } 
           if ($password!==$password2)
            {
          
         header("location:signPage.php?error=passworddon'tmatch");
         exit();

             } 
             else{

   $sql="INSERT INTO teachers2 (fname,lname,email,username,password)
        values( '$fname','$lname','$username',' $email','$password');";
        mysqli_query($conn,$sql);

        header('location:index.php');
        exit();
     }

*/
?>