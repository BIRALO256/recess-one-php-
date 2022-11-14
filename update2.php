<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="pupilRegistration.css">
	<title>Rigerster pupil</title>
</head>
<body>

      <div id="altBody" >
            <h1>Update Status</h1>
            <div id="registrationContainer">
                <div id='formRegistraion'>
                    <form method="POST"  action="update.php">
                        <table border="0px">
                            <tr>
                                <td>User code</td>
                                <td><input type="text" name="Fname" required  placeholder="enter usercode"></td>
                            </tr>
                            <tr>
                                <td>Action</td>
                                <td><input type="text" name="stat" required placeholder="activate or deactivate"></td>
                            </tr>
                           <!--  <tr>
                                <td>Phone Number</td>
                                <td><input type="number" name="Pnum" required placeholder=" phone number"></td>
                            </tr>
                            <tr>
                                <td>User Code</td>
                                <td><input type="text" name="Ucode" required placeholder="enter usercode"></td>
                            </tr>  -->   
                        </table>
                         <p><input type="submit" value="update"id='submit02' name="REGISTER" ></p>
                    </form>
                </div>
            </div>
        </div> 



      <div id="altBody" >
            <h1>Comment</h1>
            <div id="registrationContainer">
                <div id='formRegistraion'>
                    <form method="POST"  action="signup.php">
                        <table border="0px"  >
                            <!-- <tr>
                                <td>User code</td>
                                <td><input type="text" name="Fname" required  placeholder="enter usercode"></td>
                            </tr> -->
                            <tr>
                                <td>Action</td>
                                <td><input type="text" name="lname" required placeholder="activate or deactivate"></td>
                            </tr>  
                        </table>
                         <p><input type="submit" value="update"id='submit02' name="REGISTER" ></p>
                    </form>
                </div>
            </div>
        </div> 

</body>
</html>