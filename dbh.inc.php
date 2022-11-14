<?php

                    $dbSevername="localhost";
                    $dbUser="jovic";
                    $dbPassword="jovic1234";   
                    $dbName="nuserlearning";
/* mysql is nolonger secure and outdated that's why we are using mysqli*/
                    $conn=mysqli_connect($dbSevername, $dbUser,$dbPassword,$dbName);


            /*  if (!$conn) {

                    die('error'.mysqli_connect_error());
              }
              else {
                    die('connected');
              }*/

?>