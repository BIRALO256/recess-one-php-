<?php
// Initialize the session
//session_start();
 
// Check if the user is already logged in, if yes then redirect him to form page
//if(isset($_POST["login"]) && $_POST["login"] === true){
   // header("location: index.php");
    //exit;
//}
   if (isset($_POST['login'])) 
 
// Include config file
require_once "dbh.inc.php";
 
// Define variables and initialize with empty values

$username = $Password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
        return $username_err;
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
        return $password_err;
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM teachers WHERE username =? or email=?;";
        
        if( $stmt=mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,"ss", $username, $username);
            
            // Set parameters
           // $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 2){                    
                    // Bind result variables
                   // mysqli_stmt_bind_result($stmt);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($Password, $row['password'])){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["login"] = true;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to form page
                            header("location: assignement.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>