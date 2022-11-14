
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="signUpPage.css">
        <title>Sign up</title>
    </head>
    <body>


        <div id="altBody">
            <h1>CREATE ACCOUNT</h1>
            <div id="formContainer">
                <div id="form">
                    <form action="newsignup.php" method="post">
                        <table>
                            <tr>
                               <span><td><h3 style="color: white;">First Name:</h3></td>
                                <td><input type="text" placeholder="First Name" name="fname"required></td></span>
                            </tr>
                            <tr>
                                <span><td><h3 style="color: white;">Last Name:</h3></td>
                                <td><input type="text" placeholder="Last Name" name="lname" required ></td></span>
                            </tr>
                            <tr>
                            <span><td><h3 style="color: white;"> User Email:</h3></td>
                                <td><input type="email" placeholder="Email" name="email" required ></td></span>
                            </tr>
                            <tr>
                                <span><td><h3 style="color: white;">User Name:</h3></td>
                                <td><input type="text" placeholder="User Name" name="username" required ></td></span>
                            </tr>
                            <tr>
                                <span><td><h3 style="color: white;">Password:</h3></td>
                                <td><input type="password" placeholder="New password" name="Password" required></td></span>
                            </tr>
                            <!-- <tr>
                                <span><td><h3 style="color: white;">Password:</h3></td>
                                <td><input type="password" placeholder="Confirm Password" name="Password2" required></td></span>
                            </tr> -->
                        </table>
                        <p style="padding-right: 50%; float: right;"><input type="submit" value='SIGN UP' name="Sign" required></p>


                    </form>
                </div>
            </div>
        </div>

    </body>
</html>