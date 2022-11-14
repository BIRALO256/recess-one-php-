<?php

if(isset($_POST['login'])) {

    require 'databse.php';
    $login_error="";
    $empty_err="";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)) {
        header("Location: ../recesspart2/index.php?error=emptyfields". $username);
        $empty_err="emptyfields";
         return  $empty_err;
        exit();
    }
    else {
        $sql = "SELECT * FROM teachers2 WHERE username = ? OR email = ? AND  password= ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../recesspart2/index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "sss", $username, $username, $password);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                // $pcdCheck = password_verify($passcode, $row['teacherPasscode']);
                // if($pcdCheck == false) {
                //     header("Location: ../teacherLogin.php?error=wrongpcd");
                //     exit();
                // }
                // else if($pcdCheck == true){
                //     session_start();
                //     $_SESSION['trpcd'] = $row['teacherPasscode'];
                //     $_SESSION['userUid'] = $row['teacherUsername'];
                //     header("Location: ../welDash.php");
                //     exit();
                // } 
                // else{
                //     header("Location: ../teacherLogin.php?error=wrongpcd");
                //     exit();
                if($password == $row['password']) {
                    session_start();
                    $_SESSION['trpcd'] = $row['password'];
                    $_SESSION['userUid'] = $row['username']; 
                    header("Location: ../recesspart2/assignement.php");
                    exit();
                }
                else {
                    // echo'<script type="text/javascript">';
                    // echo'alert("invald username or password!")';
                    // echo'window.location.href="index.php" ';
                    // echo'</script>';
                    header("Location: ../recesspart2/index.php?error=wrongpcd");
                    $login_error="wrong password";
                    return $login_error;
                    exit();

                }
            }
            else {
                header("Location: ../recesspart2/index.php?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../recesspart2/index.php");
    exit();
}