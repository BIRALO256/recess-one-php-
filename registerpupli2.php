
         <?php include "sidebar.php" ;?>



     <!-- <h1 style="" > You are welcome <?php echo $_SESSION['userUid'];?> </h1> -->

    <div class="content col-md-9">
     


            <div id="registrationContainer">
                <div id='formRegistraion'>
                    <form method="POST"  action="signup.php">
            <h1>REGISTER PUPIL</h1>
                        <table border="0px">
                            <tr>
                                <td>First Name</td>
                                <td><input type="text" name="Fname" required  placeholder="enter firstname"></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><input type="text" name="lname" required placeholder="enter lastname"></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td><input type="number" name="Pnum" required placeholder=" phone number"></td>
                            </tr>
                            <tr>
                                <td>User Code</td>
                                <td><input type="text" name="Ucode" required placeholder="enter usercode"></td>
                            </tr>    
                        </table>
                         <p><input type="submit" value="REGISTER"id='submit02' name="REGISTER" ></p>
                    </form>
                </div>
            </div>
        </div> 


</body>
</html>