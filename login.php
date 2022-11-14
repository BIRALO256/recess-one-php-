<?php

$login_error="";
$Passwordchecking="";
if (isset($_POST['login'])) 
{
require_once('dbh.inc.php');

	$username = $_POST['username'];

	$Password=$_POST['password'];
    
    if (empty($username)||empty($Password))
     {
    	
    
    $login_error= " empty fields";


     }
     else
       {
/*? helps in prepaired statements*/
        $sql="SELECT * FROM teachers2 WHERE username =? OR email=? ;";


        /* stmt just a short form for statement (variable)*/


       $stmt=mysqli_stmt_init($conn);

         if(!mysqli_stmt_prepare($conn,$sql))
            {
           
         header("location:index.php?error=sqlerror");
              exit();

            }
            else
            {

       mysqli_stmt_bind_param($stmt,"ss", $username,$username);
       mysqli_stmt_execute($stmt);

       $result=mysqli_stmt_get_result($stmt);

       if ($row=mysqli_fetch_assoc($result) ) 
        {

         
       $Passwordchecking =password_verify($Password,$row['password']);
       if ($Passwordchecking==fasle) 
  {
    

      header("location:index.php?error=wrong_password");

          $login_error= "wrong password";
              exit();
         
  }
  else if ($Passwordchecking== true)
  {

         session_start();
          
          $_SESSION['the_owner']=$row['username'];
                      
         $_SESSION['his_or_her_idnumber']=$row['idnumber'];
                        $login_error= " your logged in";
            header("location:assignement.php");
            exit();

  }
   else
   {

    header("location:index.php");
    exit();

   }
        }
        /*     else
           {
header("location:index.php?error=no_user");

          $login_error= " no user";
              exit();

            }


/*s means which kind of data are we passing to the database for checking like s for string, b for bolean and the actual data being passed*/
             /*  if ($row=mysqli_fetch_assoc($result)) 
               {
               	/* this condintion finds out if the above exected condition has got some results or not*/
                
             /*   $Passwordchecking=password_verify($Password, $row['password']);
  /*after comparing the entered password with resulted password from the database we continue to find out if they match using a boolean since its a true or false(0or 1)*/
              /*if ($Passwordchecking==false)
                    {
                	  $login_error= " wrong password";



                    }
                    
                    else if($Passwordchecking==true)
                     {

                     session_start();
                     what is within the brackets[]of the session is it's name aszin name of the seesion

                     $_SESSION['the_owner']=$row['username'];
                      
                      $_SESSION['his_or_her_username']=$row['password'];
                        $login_error= " your logged in"; 
                     } 

                     else
                      {
                        
                  $login_error= " wrong password 2";
                      }
                if the condition has got some results those results are matched with the entered credentials

               }

               else
                 {
                
                  $login_error= " user doesn't exsist";
              //exit();
        	


                 }*/
             }



       }

}

?>