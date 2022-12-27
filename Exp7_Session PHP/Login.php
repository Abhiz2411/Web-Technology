<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Form</title>

</head>
<body>
    <fieldset>
        <legend style="size:2vw;"><b>Login Form</b></legend>
            <form action = "home.php" method = "post">
                <table width="900px" cellspacing="5">
                    <tr>
                        <td>
                            <label for="usern">Username:*</label>
                        </td>
                        <td>
                            <input type="text" name="usern" id="usern" required="" placeholder="Enter username" autofocus>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="passw">Password:*</label>
                        </td>
                        <td>
                            <input type="password" name="passw" id="passw" required="" placeholder="Enter password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name = "login" value="Login">
                            <input type="reset" value="reset">
                        </td>
                    </tr>
                </table>
            </form>
    </fieldset>
</body>
</html>